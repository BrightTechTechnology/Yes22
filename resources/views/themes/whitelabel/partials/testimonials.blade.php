@foreach($testimonials as $testimonial)
    <blockquote>
        {{var_dump($testimonial)}}
        {{-- }}<p><i>{{$testimonial['text']}}</i></p>
        <footer>{{$testimonial['author']}}, {{$testimonial['time']}}</footer>
        ★★★★☆ {{$testimonial['rating']}} / 5 --}}
    </blockquote>
@endforeach