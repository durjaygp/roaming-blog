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

    public function wordStartsWith($start)
    {
        $harfler = null;
        $end = null;
        $contain = null;
        $length = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
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
        $paginator = $this->makeThePagination($allresult);

        return view('unscramble', compact('paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }

    public function wordEndsWith($end)
    {
        $harfler = null;
        $start = null;
        $contain = null;
        $length = null;
        $maxWildcards = null;
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
        $paginator = $this->makeThePagination($allresult);

        return view('unscramble', compact('paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }

    public function wordContains($contain)
    {
        $harfler = null;
        $start = null;
        $end = null;
        $length = null;
        $maxWildcards = null;
        $allresult = $this->getResultKelime('');
        $allresult = $allresult->filter(function ($item) use ($contain) {$containsTransformed1 = str_replace('a','â',$contain);
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
        $paginator = $this->makeThePagination($allresult);

        return view('unscramble', compact('paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
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
        $paginator = $this->makeThePagination($allresult);

        return view('unscramble', compact('paginator', 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards'));
    }

    public function kelimebulucu(Request $request)
    {
        $harfler = $request->input('harfler');
        $harfler = $this->replaceTurkichLetterI($harfler);
        $start = $request->input('baslayan');
        $start = $this->replaceTurkichLetterI($start);
        $end = $request->input('biten');
        $end = $this->replaceTurkichLetterI($end);
        $contain = $request->input('iceren');
        $contain = $this->replaceTurkichLetterI($contain);
        $length = $request->input('uzunluk');
        $maxWildcards = substr_count($harfler, "?");
        if (!$harfler && !$start && !$end && !$contain && !$length && !$maxWildcards) {
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
        return view('unscramble', compact( 'count','harfler', 'start', 'end', 'contain', 'length', 'maxWildcards','message','paginator'));
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

    public function replaceTurkichLetterI($harfler){
        if (preg_match('/[ıI]/u', $harfler)) {
            $harfler = preg_replace('/[iı]/iu', 'ı', $harfler);
            $harfler = mb_strtolower($harfler);
        } else {
            $harfler = mb_strtolower($harfler);
        }
        return $harfler;
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

    public function getMeaning(Request $request){
        $word = $request->input('word');
        $meanings = words_meanings::where('WM_word', $word)->distinct('WM_meaning')->get(['WM_meaning']);
        return response()->json(
            ['meaning'=>$meanings]
        );
    }
}

