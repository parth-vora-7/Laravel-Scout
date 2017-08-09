@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4>Total {{ $blogs->count() }} blog(s) found.</h4>
			@foreach($blogs as $blog)
			<article>
				<h3>{{ $blog->title }}</h3>
				<div class="clearfix">
					<p>{{ $blog->description }}</p>
					<div>
						<em class="pull-right"> - {{ $blog->author }}</em>
						<span class="pull-left"> {{ $blog->published_at }}</span>
					</div>
				</div>
			</article>
			<hr/>
			@endforeach	
			{{ $blogs->links() }}
		</div>
	</div>
</div>
@endsection