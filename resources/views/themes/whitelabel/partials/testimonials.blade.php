@foreach($testimonials as $testimonial)
    <blockquote>
        <p><i>{{$testimonial['text']}}</i></p>
        <footer>{{$testimonial['author']}}, {{$testimonial['time']}}</footer>
        @for($i=4;$i>-1; $i--)
            @if($i<$testimonial['rating'])
                ★
            @else
                ☆
            @endif
        @endfor
        {{$testimonial['rating']}} / 5
    </blockquote>
@endforeach