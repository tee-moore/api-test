@extends('welcome')

@section('content')

    <div class="product">
        <div class="product-name">
            <h1>Spider-Man: Homecoming</h1>
        </div>
        <div class="product-img">
            <img src="https://upload.wikimedia.org/wikipedia/en/f/f9/Spider-Man_Homecoming_poster.jpg" alt="Spider-Man: Homecoming">
        </div>
        <div class="product-description">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores aspernatur corporis cum dicta dolor dolorem eligendi enim eos eum fugit id quaerat quasi quia repellat, reprehenderit saepe voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores aspernatur corporis cum dicta dolor dolorem eligendi enim eos eum fugit id quaerat quasi quia repellat, reprehenderit saepe voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium asperiores aspernatur corporis cum dicta dolor dolorem eligendi enim eos eum fugit id quaerat quasi quia repellat, reprehenderit saepe voluptas!
            </p>
        </div>
    </div>

    <div class="form">
        <div class="form-heading">Preorder confirmation form</div>
        <form>
            <label for="email">
                <span>Email <span class="required">*</span></span>
                <input type="email" class="input-field" name="email" value="admin@mail.com">
            </label>
            <label for="name">
                <span>Name <span class="required">*</span></span>
                <input type="text" class="input-field" name="name" value="admin">
            </label>
            <label>
                <span></span>
                <input name="submit" type="button" value="Make preorder">
                <input name="action" type="hidden" value="{{route('preorder.store')}}">
                <input name="movie_id" type="hidden" value="1">
                @csrf
            </label>
        </form>
    </div>
@endsection
