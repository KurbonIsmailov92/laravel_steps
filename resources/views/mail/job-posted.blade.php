<h2>
    {{$job->title}}
</h2>

<p>
    Congrads! Your job is now live on our website.
</p>

<p>
    <a href="{{url('/jobs/' . $job->id)}}">View Your Job</a>
</p>
