<!DOCTYPE html>
<html>
<head>
    <title>Edit Post Comment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .content {
            display: flex;
            flex-direction: column;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .success, .error {
            text-align: center;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            color: green;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .error {
            color: red;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .image-container {
            text-align: center;
            margin-top: 20px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        @media (min-width: 768px) {
            .content {
                flex-direction: row;
                justify-content: space-between;
            }
            .container {
                max-width: 800px;
            }
            .form-container, .image-container {
                flex: 1;
                margin: 0 10px;
            }
            .image-container {
                text-align: left;
                margin-top: 0;
            }
            .image-container img {
                max-width: 100%;
                height: auto;
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Post Comment</h1>
        <div class="content">
            <div class="form-container">
                @if (session('success'))
                    <div class="success">
                        <b>{{ session('success') }}</b>
                        <script>
                            setTimeout(function() {
                                document.querySelector('.success').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @elseif(session('error'))
                    <div class="error">
                        <b>{{ session('error') }}</b>
                        <script>
                            setTimeout(function() {
                                document.querySelector('.error').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif

                <form method="POST" action="{{ route('update_post_comment', $postcomments) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label>Post Id</label>
                        <input type="number" name="post_id" value="{{$postcomments->post_id}}" required>
                    </div>
                    
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{$postcomments->name}}" required>
                    </div>

                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="{{$postcomments->username}}" required>
                    </div>

                    <div>
                        <label>Post</label>
                        <textarea name="post" required> {{$postcomments->post}} </textarea>
                    </div>

                    <div>
                        <label>Comment</label>
                        <input type="text" value="{{$postcomments->comment}}" name="comment" min="0">
                    </div>

                    <div>
                        <label>Repost</label>
                        <input type="text" value="{{$postcomments->repost}}" name="repost" min="0">
                    </div>

                    <div>
                        <label>Like</label>
                        <input type="text" value="{{$postcomments->like}}" name="like" min="0">
                    </div>

                    <div>
                        <label>Views</label>
                        <input type="text" value="{{$postcomments->view}}" name="view" min="0">
                    </div>

                    <div>
                        <label>Share</label>
                        <input type="text" value="{{$postcomments->share}}" step="0.01" name="share" min="0" max="5">
                    </div>

                    <div>
                        <label>Image</label> 
                        <input type="file" value="{{$postcomments->image}}" name="image">
                    </div>

                    <div>
                        <button type="submit">Update Post Comment</button>
                    </div>
                </form>
            </div>
            <div class="image-container">
                <img src="{{asset('assets/img/' . $postcomments->image)}}" alt="{{$postcomments->post}}" title="{{$postcomments->post}}">
            </div>
        </div>
    </div>
</body>
</html>
