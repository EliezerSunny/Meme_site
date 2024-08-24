<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<title>@commit_memes</title>
	<style>
		:root {
			/* background color #fff #16202a */
  			--clr-bcg: #fff; 
			/* text color #050505 #fff */
  			--clr-text: #050505;
  			/* watermark color #f2f2f7 #66676b */
  		   	--clr-watermark: #f2f2f7;
			/* text color #66676b #66676b */
			--clr-gray: #66676b;
			/* react bacground color #fbfbfc #fbfbfc */
			--clr-reactbg: #fbfbfc;
			/* react bacground color focus #f1f2f6 #f1f2f6 */
			--clr-reactbgh: #f1f2f6;
		}
		body{
			background: var(--clr-bcg);
			font-family: sans-serif;
			color: var(--clr-text);
		}
		.watermark{
			position: absolute;
			color: var(--clr-watermark);
			font-size: 35px;
			z-index: -999;
			margin: 35px 50px;
			opacity: 0.5;
		}
		.watermark2{
			position: absolute;
			color: var(--clr-watermark);
			font-size: 20px;
			z-index: -999;
			margin: 94px 50px;
			opacity: 0.5;
		}
		.container{
			padding: 5px;
			border-radius: 5px;
		}
		.container2{
			padding: 5px;
			border-radius: 5px;
		}
		.poster{
			font-size: 15px;
		}
		.user_picture{
			float: left;
		}
		.user_picture2{
			float: left;
		}
		
		.user_picture img{
			width: 45px;
			height: 45px;
			object-fit: cover;
			border-radius: 50%;
		}
		.user_picture2 img{
			width: 40px;
			height: 40px;
			object-fit: cover;
			border-radius: 50%;
		}
		.name{
			padding-left: 8px;
			display: flex;
			justify-content: space-between;
			font-size: 14px;
		}
		.user_name{
			position: relative;
			margin-top: -15px;
		}
		.user_name h4{
		    font-size: 16px;
		}
		.user_name img{
			width: 16px;
			margin-bottom: -2px;
		}

		.name2{
			padding-left: 8px;
			display: flex;
			justify-content: space-between;
			font-size: 13px;
		}
		.user_name2{
			position: relative;
			margin-top: -15px;
		}
		.user_name2 h4{
		    font-size: 15px;
		}
		.user_name2 img{
			width: 15px;
			margin-bottom: -2px;
		}

		time img{
			width: 15px;
		}
		h4{
			margin-bottom: 0px;
		}
		.username{
			color: var(--clr-gray);
			font-size: 12px;
		}
		.username a{
			color: #2898e4;
			text-decoration: none;
		}
		.more_dots{
			color: var(--clr-gray);
			font-size: 20px;
		}
		.more_dots2{
			color: var(--clr-gray);
			font-size: 20px;
		}
		hr{
			border-top: 1px var(--clr-gray);
		}
		.hr2{
			border-left: 1px var(--clr-gray);
			height: 50px;
			position: absolute;
			margin-left: 20px;
		}

		.main_post{
			padding: 6px;
			font-size: 16px;
		}
		.main_post p{
			margin-bottom: 6px;
		}
		.main_post2{
			padding: 6px 0px 6px 52px;
			font-size: 16px;
		}
		.main_post2 p{
			margin-bottom: 6px;
		}
		.date_views{
			padding: 5px 0px;
			font-size: 12px;
			color: var(--clr-gray);
		}
		.view_count{
			color: var(--clr-text);
		}
		.r_c_s{
			width: 100%;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
			gap: 10px;
			
		}
		.r_c_s button{
			padding: 7px;
			border-radius: 50px;
			background: var(--clr-reactbg);
			outline: none;
			border: none;
			cursor: pointer;
			color: var(--clr-gray);
		}
		.r_c_s button:hover{
			background: var(--clr-reactbgh);
		}
		.r_c_s button:focus{
			background: var(--clr-reactbgh);
		}
		.comment_text{
			line-height: 1.4;
			font-size: 14px;
		}

		@media screen and (min-width:750px) {
			body{
				width: 40%;
				margin: 20px auto;
				border: 1px solid var(--clr-gray);
				border-radius: 3px;
			}
		}

	</style>
</head>
<body>

	<div class="watermark">
		<span>@commit_memes</span>
	</div>
	<!-- container -->
	<div class="container">

		<div class="poster">

			<div class="user_picture">
				<img src="{{asset('assets/img/user.png')}}" alt="Commit Memes" title="Commit Memes">
			</div>

			<div class="name">
			<div class="user_name">
				<h4>{{$posts['name']}} <img src="{{asset('assets/img/verified.png')}}" alt="Verified"></h4>
				<span class="username">{{'@' . $posts['username']}}</span>
			</div>

			<div class="more_dots">
			    <a href="http://127.0.0.1:8000/edit_post?id=1" target="_blank">
				<i class="fa fa-horizontal-dots"><b>...</b></i>
				</a>
			</div>
			</div>

		</div>


		<div class="main_post">
			<p>{{$posts['post']}}</p>
			
			@if($posts->share >= 20)
			<img src="{{asset('assets/img/' . $posts->image)}}" alt="{{$posts['post']}}" title="{{$posts['post']}}" style="width:100%; padding: 3px 0px; border-radius: 5px;"> 
			@endif

			<div class="date_views">
				<span>6:40 AM . Sep 20, 2023 . <span class="view_count">{{$posts->view}}</span> Views</span>
			</div>
			<hr>

			<div class="r_c_s">
				<button><i class="fa fa-comment-o"></i> {{$posts->comment}}</button>
				<button><i class="fa fa-repost"></i> {{$posts->repost}}</button>
				<button style="color: #f91880;"><i class="fa fa-heart"></i> {{$posts->like}}</button>
				<button><i class="fa fa-eye"></i> {{$posts->view}}</button>
				<button><i class="fa fa-share-alt"></i> {{$posts->share}}</button>
			</div>
		
		</div>


<hr>
		</div>
		<!-- container end -->


		<div class="watermark2">
			<span>@commit_memes</span>
		</div>


		<!-- <hr> -->

		<!-- container2 -->
		<div class="container2">


    <!-- main comment posts -->
	<div class="poster">

		<div class="user_picture2">
			<img src="{{asset('assets/img/userpostcomment.png')}}" alt="{{$postcomments->name}}" title="{{$postcomments->name}}">
			<hr class="hr2">
		</div>

		<div class="name2">
		<div class="user_name2">
			<h4>{{$postcomments->name}} <img src="{{asset('assets/img/verified.png')}}" alt="Verified"> <span class="username">{{'@'.$postcomments->username}} . 17h</span></h4>
			<span class="comment_text"><span class="username">Replying to <a href="#">{{'@'.$posts->username}}</a></span> <br> {{$postcomments->post}}</span>
		</div>

		<div class="more_dots2">
		    <a href="http://127.0.0.1:8000/edit_post_comment?postcomments=1" target="_blank" title="Edit">
			<i class="fa fa-horizontal-dots"><b>...</b></i>
			</a>
		</div>
		</div>

	</div>


	<div class="main_post2">
	    
	    @if($postcomments->share >= 10)
		<img src="{{asset('assets/img/' . $postcomments->image)}}" alt="user6" title="user6" style="width:100%; padding: 3px 0px; border-radius: 5px;">
  @endif

		<div class="r_c_s">
			<button><i class="fa fa-comment-o"></i> {{$postcomments->comment}}</button>
			<button><i class="fa fa-repost"></i> {{$postcomments->repost}}</button>
			<button style="color: #f91880;"><i class="fa fa-heart"></i> {{$postcomments->like}}</button>
			<button><i class="fa fa-eye"></i> {{$postcomments->view}}</button>
			<button><i class="fa fa-share-alt"></i> {{$postcomments->share}}</button>
		</div>

	
	</div>
    <!-- main comment posts end -->
	


	</div>
	<!-- container2 end-->

	<hr>

</body>
</html>
