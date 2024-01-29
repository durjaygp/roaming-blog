<div id="accordian">
    <h4>Latest Resources</h4>
    <ul class="show-dropdown">
        @php
            $blogs = \App\Models\Blog::whereStatus(1)->latest()->get();
        @endphp
        @foreach($blogs as $row)
            <li>
                <a href="{{route('resources.details',$row->slug)}}">{{$row->name}}</a>
            </li>
        @endforeach

    </ul>
</div>
