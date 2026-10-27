<h1>
    welcome to the home page
</h1>

<p>
    Hi, {{ $name }}!
</p>
<p>
    Your Habits are:
</p>
<ul>
    @foreach($habits as $habit)
        <li>
            {{ $habit }}
        </li>
    @endforeach
</ul>
