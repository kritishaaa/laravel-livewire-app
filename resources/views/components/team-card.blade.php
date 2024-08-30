<div class="card bg-transparent border-0 text-center">
	<div class="card-img">
		@if ($member->image != '')
			<img loading="lazy" decoding="async" src="{{ asset('storage/'.$member->image) }}" alt="Scarlet Pena" class="rounded w-100" width="300" height="350">
		@endif
						
		@if ($member->fb_url != '' || $member->linedin_url != '')
			<ul class="card-social list-inline">
			@if ($member->fb_url != '')		
				<li class="list-inline-item"><a class="facebook"target="_blank"  href="{{ $member->fb_url }}"><i class="fab fa-facebook"></i></a>
				</li>
			@endif
			@if ($member->linkedin_url != '')
				<li class="list-inline-item"><a class="linkedin" target="_blank" href="{{ $member->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
				</li>
			@endif
						
		@endif
						
	</div>
	<div class="card-body">
		<h3>{{ $member->name }}</h3>
		<p>{{ $member->designation }}</p>
	</div> 
</div>