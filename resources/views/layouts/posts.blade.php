@extends('layouts.base')
@section('title', 'Upload and List')

@section('body')

<div class="w-full max-w-[960px] shadow-lvc rounded-tr-lg rounded-br-lg rounded-bl-lg rounded-tl-lg">
	<h2 class="p-2 bg-green-lvc text-[#ffffff] flex items-center justify-center text-2xl rounded-tr-lg rounded-tl-lg">
		Inhalte hochladen
	</h2>

    <livewire:create-post />

</div>
@endsection
