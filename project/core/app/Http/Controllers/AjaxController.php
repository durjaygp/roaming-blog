<?php

namespace App\Http\Controllers;
use App\Models\words_meanings;
use App\Models\ListeMot;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getResultKelime($harfler)
    {
        $query = ListeMot::query();
        if($harfler && $harfler !==''){
            $length = mb_strlen(mb_strtolower($harfler), "UTF-8");
            $query->whereRaw("CHAR_LENGTH(mots) <= $length");
        }
        return $query->get();
    }

    public function replaceTurkichLetterI($harfler){
        $length = mb_strlen($harfler, 'utf-8');
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $character = mb_substr($harfler, $i, 1, 'utf-8');

            if (preg_match('/[ıI]/u', $character)) {
                $character = preg_replace('/[iı]/iu', 'ı', $character);
                $character = mb_strtolower($character, 'utf-8');
            } else {
                $character = str_ireplace('İ', 'i', $character);
                $character = mb_strtolower($character, 'utf-8');
            }

            $result .= $character;
        }
        return $result;
    }

    public function wordMatchesLetters($word, $letters)
    {
        $lettersCount = array();
        $wordCount = array();

        // Count occurrences of each character in $letters
        for ($i = 0; $i < mb_strlen($letters, 'UTF-8'); $i++) {
            $char = mb_substr($letters, $i, 1, 'UTF-8');
            $lettersCount[$char] = isset($lettersCount[$char]) ? $lettersCount[$char] + 1 : 1;
        }

        // Count occurrences of each character in $word
        for ($i = 0; $i < mb_strlen($word, 'UTF-8'); $i++) {
            $char = mb_substr($word, $i, 1, 'UTF-8');
            $wordCount[$char] = isset($wordCount[$char]) ? $wordCount[$char] + 1 : 1;
        }

        // Check if $letters contains enough occurrences of each character in $word
        foreach ($wordCount as $char => $count) {
            if (!isset($lettersCount[$char]) || $lettersCount[$char] < $count) {
                return false;
            }
        }

        return true;
    }

    function countMultibyteChars($string) {
        $characters = mb_str_split($string, 1, 'UTF-8');
        $count = [];
        foreach ($characters as $char) {
            if (!isset($count[$char])) {
                $count[$char] = 1;
            } else {
                $count[$char]++;
            }
        }
        return $count;
    }

    function isMatch($letters,$word, $maxMismatches = 1) {
        $mismatchCount = 0;
        $word = mb_strtolower($word, 'UTF-8');
        $letters = mb_strtolower($letters, 'UTF-8');
        $wordLetters = $this->countMultibyteChars($word);
        $inputLetters = $this->countMultibyteChars($letters);
        foreach ($wordLetters as $char => $count) {
            if (!isset($inputLetters[$char])) {
                $mismatchCount += $count;
            } else if($count > $inputLetters[$char]){
                $mismatchCount += abs($count - $inputLetters[$char]);
            }
        }
        return $mismatchCount <= $maxMismatches;
    }

    function makeThePagination(Collection $data,int $count){
        $processedData = [];

        foreach ($data as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }

        $perPage = 4;

        // Get the current page from the query string, or default to 1
        $page = request()->get('page', 1);

        // Slice the array to get the items for the current page
        $slicedData = array_slice($processedData, ($page - 1) * $perPage, $perPage);

        // Create a collection from the sliced data
        $collection = new Collection($slicedData);

        // Create the paginator instance
        $paginator = new LengthAwarePaginator(
            $collection,
            count($processedData), // Total items
            $perPage, // Items per page
            $page, // Current page
            [
                'path' => url()->current(),
                'query' => request()->query(),
            ]
        );
        return $paginator;
    }

    public function wordStartsWith($start)
    {
        $harfler = null;
        $end = null;
        $contain = null;
        $length = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $start = $this->replaceTurkichLetterI($start);
        $allresult = $allresult->filter(function ($item) use ($start) {
            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            return ($startsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start) . ' ' . __('frontend.starts_with_header');

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordEndsWith($end)
    {
        $harfler = null;
        $start = null;
        $contain = null;
        $length = null;
        $maxWildcards = null;
        $end = $this->replaceTurkichLetterI($end);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($end) {
            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            return ($endsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($end).' ile biten kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordContains($contain)
    {
        $harfler = null;
        $start = null;
        $end = null;
        $length = null;
        $maxWildcards = null;
        $contain = $this->replaceTurkichLetterI($contain);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($contain) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            return ($contains) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });
        $count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = 'İçinde '. mb_strtoupper($contain) . ' ' . __('frontend.contains_header');

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordLength($length)
    {
        $harfler = null;
        $start = null;
        $end = null;
        $contain = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($length) {
            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });
        // Remove the specific item by key
        $allresult = $allresult->reject(function ($item, $key) use ($length) {
            return $key == $length-1;
        });
        $count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = $length . ' ' . __('frontend.letter_word');

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }

    public function wordHarfler($harfler){
        $end = null;
        $start = null;
        $contain = null;
        $length = null;
        $maxWildcards = substr_count($harfler, "_")>0?substr_count($harfler, "_"):null;
        $allresult = $this->getResultKelime('');
        $harfler = $this->replaceTurkichLetterI($harfler);
        $allresult = $allresult->filter(function ($item) use ($harfler) {
            $harflerTransformed1 = str_replace('â','a',$harfler);
            $harflerTransformed2 = str_replace('î','i',$harfler);
            $harflerTransformed3 = str_replace('û','u',$harfler);
            $maxWildcards = substr_count($harfler, "_");

            if ($maxWildcards > 0) {
                return ($this->isMatch($harfler,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed1,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed2,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed3,mb_strtolower($item->mots) , $maxWildcards)) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
            }

            $matchesLetters = !$harfler || $this->wordMatchesLetters(mb_strtolower($item->mots), $harfler) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed1) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed2) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed3);
            return $matchesLetters && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = '';
        if (str_replace('_', '', $harfler) !== '' && $maxWildcards) {
            $message = '<span style="text-transform: uppercase;">' . str_replace('_', '', $harfler) . '</span> ' . __('frontend.and') . ' ' . $maxWildcards . ' ' . __('frontend.wildcard') . ' ' . __('frontend.showing_words');
        } elseif (str_replace('_', '', $harfler) !== '') {
            $message = '<span style="text-transform: uppercase;">' . str_replace('_', '', $harfler) . '</span> ' . __('frontend.showing_words');
        } elseif (str_replace('_', '', $harfler) === '' && $maxWildcards) {
            $message = $maxWildcards . ' ' . __('frontend.wildcard') . ' ' . __('frontend.showing_words');
        }
        $harfler = str_replace('_','?',$harfler);

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordStartContains($start, $contains){
        $harfler = null;
        $end = null;
        $length = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $start = $this->replaceTurkichLetterI($start);
        $contain = $this->replaceTurkichLetterI($contains);
        $allresult = $allresult->filter(function ($item) use ($start,$contain) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            return ($startsWith && $contains) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start).' ile başlayan, içinde '. mb_strtoupper($contain) .' olan kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordStartEnds($start, $ends){
        $harfler = null;
        $contain = null;
        $length = null;
        $maxWildcards = null;
        $start = $this->replaceTurkichLetterI($start);
        $end = $this->replaceTurkichLetterI($ends);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($start,$end) {
            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            return ($startsWith && $endsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start). ' ile başlayan, '. mb_strtoupper($end) .' ile biten kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordStartLength($start, $length){
        $harfler = null;
        $contain = null;
        $end = null;
        $maxWildcards = null;
        $start = $this->replaceTurkichLetterI($start);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($length, $start) {
            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($startsWith && $lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start). ' ile başlayan, '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    ///-----------------------///
    public function wordContainsEnd($contains, $end){
        $harfler = null;
        $start = null;
        $length = null;
        $maxWildcards = null;
        $contain = $this->replaceTurkichLetterI($contains);
        $end = $this->replaceTurkichLetterI($end);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($contain, $end) {

            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            return ($endsWith && $contains) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = 'İçinde '. mb_strtoupper($contains) .' olan, '. mb_strtoupper($end) .' ile biten kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordContainsLength($contains, $length){
        $harfler = null;
        $start = null;
        $end = null;
        $maxWildcards = null;
        $contain = $this->replaceTurkichLetterI($contains);
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($contain, $length) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);
            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($lengthMatches && $contains) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = 'İçinde '. mb_strtoupper($contains) .' olan, '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordEndLength($end, $length){
        $harfler = null;
        $start = null;
        $maxWildcards = null;
        $end = $this->replaceTurkichLetterI($end);
        $contain = null;
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($end, $length) {
            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);
            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($lengthMatches && $endsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($end). ' ile biten,' . $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    ///=========================///
    public function wordStartContainsEnds($start, $contains, $end){
        $harfler = null;
        $length = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $start = $this->replaceTurkichLetterI($start);
        $contain = $this->replaceTurkichLetterI($contains);
        $end = $this->replaceTurkichLetterI($end);
        $allresult = $allresult->filter(function ($item) use ($start,$contain,$end) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            return ($startsWith && $contains && $endsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start) .' ile başlayan, içinde '. mb_strtoupper($contain).', '. mb_strtoupper($end) .' ile biten kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordStartContainsLength($start, $contains, $length){
        $harfler = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $start = $this->replaceTurkichLetterI($start);
        $contain = $this->replaceTurkichLetterI($contains);
        $end = null;
        $allresult = $allresult->filter(function ($item) use ($start,$contain,$length) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($startsWith && $contains && $lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start) .' ile başlayan, içinde '. mb_strtoupper($contain).', '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordStartEndsLength($start, $end, $length){
        $harfler = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $start = $this->replaceTurkichLetterI($start);
        $end = $this->replaceTurkichLetterI($end);
        $contain = null;
        $allresult = $allresult->filter(function ($item) use ($start,$end,$length) {
            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);

            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($startsWith && $endsWith && $lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start) .' ile başlayan, '. mb_strtoupper($end).' ile biten, '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    public function wordContainsEndsLength($contains, $end, $length){
        $harfler = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $contain = $this->replaceTurkichLetterI($contains);
        $end = $this->replaceTurkichLetterI($end);
        $start = null;
        $allresult = $allresult->filter(function ($item) use ($contain,$end,$length) {
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($contains && $endsWith && $lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = 'İçinde '. mb_strtoupper($contain).', '. mb_strtoupper($end) .' ile biten, '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }
    //******************----------------****************//
    public function wordAllOptions($start, $contains, $end, $length){
        $harfler = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $contain = $this->replaceTurkichLetterI($contains);
        $end = $this->replaceTurkichLetterI($end);
        $start = $this->replaceTurkichLetterI($start);
        $allresult = $allresult->filter(function ($item) use ($start, $contain,$end,$length) {
            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);


            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);

            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);

            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;

            return ($contains && $endsWith && $lengthMatches && $startsWith) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });$count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $message = mb_strtoupper($start) .' ile başlayan, içinde '. mb_strtoupper($contain) .', '. mb_strtoupper($end). ' ile biten, '. $length .' harfli kelimeler';

        return view('unscrambleMeta', compact('message','paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }

    public function kelimebulucu(Request $request)
    {
        $harfler = $request->input('harfler');
        $harfler = $this->replaceTurkichLetterI($harfler);
        $maxWildcards = substr_count($harfler, "?");
        $start = $request->input('baslayan');
        $start = $this->replaceTurkichLetterI($start);
        $end = $request->input('biten');
        $end = $this->replaceTurkichLetterI($end);
        $contain = $request->input('iceren');
        $contain = $this->replaceTurkichLetterI($contain);
        $length = $request->input('uzunluk');
        if($start && !$end && !$contain && !$length && !$harfler){
            return redirect(route('search.start',$start));
        }
        if(!$start && $end && !$contain && !$length && !$harfler){
            return redirect(route('search.end',$end));
        }
        if (!$start && !$end && $contain && !$length && !$harfler){
            return redirect(route('search.contains',$contain));
        }
        if (!$start && !$end && !$contain && $length && !$harfler){
            return redirect(route('search.length',$length));
        }
        //********************************************//
        if($start && $contain && !$length && !$end && !$harfler){
            return redirect(route('search.start_contains',['start'=>$start,'contains'=>$contain]));
        }
        if($start && !$contain && !$length && $end && !$harfler){
            return redirect(route('search.start_ends',['start'=>$start,'ends'=>$end]));
        }
        if($start && !$contain && $length && !$end && !$harfler){
            return redirect(route('search.start_length',['start'=>$start,'length'=>$length]));
        }
        ////////////
        if(!$start && $contain && !$length && $end && !$harfler){
            return redirect(route('search.contains_end',['end'=>$end,'contains'=>$contain]));
        }
        if(!$start && $contain && $length && !$end && !$harfler){
            return redirect(route('search.contains_length',['length'=>$length,'contains'=>$contain]));
        }
        if(!$start && !$contain && $length && $end && !$harfler){
            return redirect(route('search.end_length',['end'=>$end,'length'=>$length]));
        }
        //------------------------------//
        if($start && $contain && !$length && $end && !$harfler){
            return redirect(route('search.start_contains_end',['start'=>$start,'end'=>$end,'contains'=>$contain]));
        }
        if($start && $contain && $length && !$end && !$harfler){
            return redirect(route('search.start_contains_length',['start'=>$start,'length'=>$length,'contains'=>$contain]));
        }
        if($start && !$contain && $length && $end && !$harfler){
            return redirect(route('search.start_ends_length',['start'=>$start,'end'=>$end,'length'=>$length]));
        }
        if(!$start && $contain && $length && $end && !$harfler){
            return redirect(route('search.contains_ends_length',['contains'=>$contain,'end'=>$end,'length'=>$length]));
        }
        //============================================//
        if($start && $contain && $length && $end && !$harfler){
            return redirect(route('search.all_options',['start'=>$start,'end'=>$end,'contains'=>$contain,'length'=>$length]));
        }
        if($harfler && !$contain && !$end && !$length && !$start){
            $harfler = str_replace('?','_',$harfler);
            return redirect(route('search.harflerWord',$harfler));
        }
        if (!$harfler && !$start && !$end && !$contain && !$length) {
            $allresult = [];
            $count = 0;
            return view('unscramble', compact('allresult', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
        }
        $allresult = $this->getResultKelime($harfler);
        $allresult = $allresult->filter(function ($item) use ($harfler, $start, $end, $contain, $length, $maxWildcards) {
            $startTransformed1 = str_replace('â','a',$start);
            $startTransformed2 = str_replace('î','i',$start);
            $startTransformed3 = str_replace('û','u',$start);
            $startsWith = !$start || str_starts_with(mb_strtolower($item->mots), $start) || str_starts_with(mb_strtolower($item->mots), $startTransformed1) || str_starts_with(mb_strtolower($item->mots), $startTransformed2) || str_starts_with(mb_strtolower($item->mots), $startTransformed3);
            $endTransformed1 = str_replace('â','a',$end);
            $endTransformed2 = str_replace('î','i',$end);
            $endTransformed3 = str_replace('û','u',$end);
            $endsWith = !$end || str_ends_with(mb_strtolower($item->mots), $end) || str_ends_with(mb_strtolower($item->mots), $endTransformed1) || str_ends_with(mb_strtolower($item->mots), $endTransformed2) || str_ends_with(mb_strtolower($item->mots), $endTransformed3);
            $containsTransformed1 = str_replace('â','a',$contain);
            $containsTransformed2 = str_replace('î','i',$contain);
            $containsTransformed3 = str_replace('û','u',$contain);
            $contains = !$contain || str_contains(mb_strtolower($item->mots), $contain) || str_contains(mb_strtolower($item->mots), $containsTransformed1) || str_contains(mb_strtolower($item->mots), $containsTransformed2) || str_contains(mb_strtolower($item->mots), $containsTransformed3);
            $lengthMatches = !$length || mb_strlen(mb_strtolower($item->mots)) == $length;
            $harflerTransformed1 = str_replace('â','a',$harfler);
            $harflerTransformed2 = str_replace('î','i',$harfler);
            $harflerTransformed3 = str_replace('û','u',$harfler);

            if ($maxWildcards > 0) {
                return ($this->isMatch($harfler,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed1,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed2,mb_strtolower($item->mots) , $maxWildcards) || $this->isMatch($harflerTransformed3,mb_strtolower($item->mots) , $maxWildcards)) && ($startsWith && $endsWith && $contains && $lengthMatches && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1);
            }

            $matchesLetters = !$harfler || $this->wordMatchesLetters(mb_strtolower($item->mots), $harfler) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed1) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed2) || $this->wordMatchesLetters(mb_strtolower($item->mots), $harflerTransformed3);
            return ($matchesLetters && $startsWith && $endsWith && $contains && $lengthMatches) && mb_strlen(mb_strtolower($item->mots), "UTF-8") > 1;
        })->groupBy(function ($item) {
            return mb_strlen($item->mots);
        })->sortByDesc(function ($items, $key) {
            return $key;
        });
        if($length){
            // Remove the specific item by key
            $allresult = $allresult->reject(function ($item, $key) use ($length) {
                return $key == $length-1;
            });
        }
        $count = 0;
        $allresult->map(function ($items) use (&$count) {
            $count += count($items);
        });
//        $paginator = $this->makeThePagination($allresult,$count);
        $processedData = [];

        foreach ($allresult as $key => $products) {
            $tot = count($products);
            $processedData[] = [
                'key' => $key,
                'tot' => $tot,
                'products' => $products,
            ];
        }
        $paginator = $processedData;
        $harfler = $request->input('harfler');
        $start = $request->input('baslayan');
        $end = $request->input('biten');
        $contain = $request->input('iceren');
        $message = '';
        if (str_replace('?', '', $harfler) !== '' && $maxWildcards) {
            $message = '<span style="text-transform: uppercase;">' . str_replace('?', '', $harfler) . '</span> ' . __('frontend.and') . ' ' . $maxWildcards . ' ' . __('frontend.wildcard') . ' ' . __('frontend.showing_words');
        } elseif (str_replace('?', '', $harfler) !== '') {
            $message = '<span style="text-transform: uppercase;">' . str_replace('?', '', $harfler) . '</span> ' . __('frontend.showing_words');
        } elseif (str_replace('?', '', $harfler) === '' && $maxWildcards) {
            $message = $maxWildcards . ' ' . __('frontend.wildcard') . ' ' . __('frontend.showing_words');
        }
        return view('unscrambleMeta', compact( 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards','message','paginator'));
    }

    public function getMeaning(Request $request){
        $word = $request->input('word');
        $meanings = words_meanings::where('WM_word', $word)->distinct('WM_meaning')->get(['WM_meaning']);
        return response()->json(
            ['meaning'=>$meanings]
        );
    }
}

