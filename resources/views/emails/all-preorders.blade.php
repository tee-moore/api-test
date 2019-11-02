<div>
    @foreach ($preorders as $preorder)
        Name:  {{ $preorder->name }}
        Email: {{ $preorder->email }}
        Movie: {{ $preorder->movie->name }}
        <br><hr><br>
    @endforeach
</div>
