@extends('frontEnd.layoutResult')
@section('metaHead')
    @php
        $harfler_meta = str_replace('?','',$harfler);
    @endphp
    <meta name="keywords" content="{{@$PageKeywords}}"/>
    @if(!$start && !$end && $contain && !$length && !$harfler)
        <title>İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler nelerdir? Sözlükte, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler nelerdir? Sözlükte, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && $end && !$contain && !$length && !$harfler)
        <title>{{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="{{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte, sonu {{mb_strtoupper($end, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
        content='{{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="{{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte, sonu {{mb_strtoupper($end, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && !$end && !$contain && $length && !$harfler)
        <title>{{$length}} harfli kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="{{$length}} harfli kelimeler nelerdir? Sözlükte, {{$length}} harfi olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{$length}} harfli kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="{{$length}} harfli kelimeler nelerdir? Sözlükte, {{$length}} harfi olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && !$end && !$contain && !$length && !$harfler)
        <title>{{mb_strtoupper($start, 'UTF-8')}} ile başlayan kelimeler | Kelime Bulma Oyun Yardımcısı</title>
        <meta property="og:description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan kelimeler nelerdir? Sözlükte, başında {{mb_strtoupper($start, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start, 'UTF-8')}} ile başlayan kelimeler | Kelime Bulma Oyun Yardımcısı'/>
        <meta name="description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan kelimeler nelerdir? Sözlükte, başında {{mb_strtoupper($start, 'UTF-8')}} olan {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif


    @if($start && $contain && !$length && !$end && !$harfler)
        <title>{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, içinde {{mb_strtoupper($contain, 'UTF-8')}} olan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && !$contain && !$length && $end && !$harfler)
        <title>{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && !$contain && $length && !$end && !$harfler)
        <title>{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start, 'UTF-8')}} ile başlayan, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && $contain && !$length && $end && !$harfler)
        <title>İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{mb_strtoupper($end, 'UTF-8')}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && $contain && $length && !$end && !$harfler)
        <title>İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde {{mb_strtoupper($contain, 'UTF-8')}} olan, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && !$contain && $length && $end && !$harfler)
        <title>{{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif


    @if($start && $contain && !$length && $end && !$harfler)
        <title>{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && $contain && $length && !$end && !$harfler)
        <title>{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && !$contain && $length && $end && !$harfler)
        <title>{{mb_strtoupper($start)}} ile başlayan, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start)}} ile başlayan, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start)}} ile başlayan, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start)}} ile başlayan, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if(!$start && $contain && $length && $end && !$harfler)
        <title>İçinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="İçinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='İçinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="İçinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($start && $contain && $length && $end && !$harfler)
        <title>{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($start)}} ile başlayan, içinde {{mb_strtoupper($contain)}}, {{mb_strtoupper($end)}} ile biten, {{$length}} harfli kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif




    @if($harfler_meta && $maxWildcards)
        <title>{{mb_strtoupper($harfler_meta, 'UTF-8')}} ve {{$maxWildcards}} joker harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($harfler_meta, 'UTF-8')}} ve {{$maxWildcards}} joker harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($harfler_meta, 'UTF-8')}} ve {{$maxWildcards}} joker harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($harfler_meta, 'UTF-8')}} ve {{$maxWildcards}} joker harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($harfler_meta)
        <title>{{mb_strtoupper($harfler_meta, 'UTF-8')}} harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="{{mb_strtoupper($harfler_meta, 'UTF-8')}} harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{mb_strtoupper($harfler_meta, 'UTF-8')}} harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="{{mb_strtoupper($harfler_meta, 'UTF-8')}} harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
    @if($harfler_meta==='' && $maxWildcards)
        <title>{{$maxWildcards}} joker harflerden kelime türetme | Kelimelodi</title>
        <meta property="og:description" content="{{$maxWildcards}} joker harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
        <meta property='og:title'
              content='{{$maxWildcards}} joker harflerden kelime türetme | Kelimelodi'/>
        <meta name="description" content="{{$maxWildcards}} joker harflerden oluşan kelimeler nelerdir? Sözlükte tam {{$count}} kelime bulundu. Sırayla düzenlenmiş kelimeleri hemen keşfetmeye başlayın!"/>
    @endif
@endsection
@section('content')
    @include('frontEnd.includes.resultat')
@endsection

