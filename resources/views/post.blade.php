<x-layout>
	<h1 class="font-bold text-2xl font-serif mb-2">{{ $post->title }}</h1>
	<div>
		{{ $post->body }}
	</div>
	<a href="/" class="text-sm font-bold">Go Back</a>
</x-layout>