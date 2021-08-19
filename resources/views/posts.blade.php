<x-layout>
	@foreach ($posts as $post)
		<a class="font-bold text-2xl mb-1" href="posts/{{ $post->slug }}">{{ $post->title }}</a>
		<p>{{ $post->excerpt }}</p>
	@endforeach
</x-layout>