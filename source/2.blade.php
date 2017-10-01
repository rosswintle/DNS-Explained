---
title: 
nextPage: 3
pageColor: "#207720"
buttonText: "Who knew? Well you did, but..."
---

@extends('_layouts.master')

@section('body')
<p>
	But places on the internet are actually really identified by numbers!
</p>
<p>
	For instance, this site is actually at {{ $page->siteIP }}
</p>
@endsection
