---
title: 
nextPage: 11
pageColor: "#844D9E"
buttonText: "Phew...is that it?"
---

@extends('_layouts.master')

@section('body')
<p>
	So now your computer knows the name servers, it can ask them: &ldquo;Where is dns-explained.com?&rdquo;
</p>
<p>
	And the name servers will reply with the number. In this case: {{ $page->siteIP }}
</p>
@endsection
