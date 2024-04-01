<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Your Page Title</title>

    <!-- Your styles or external stylesheets here -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 100%;
        }

        .pair-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;
        }

        .pair-container input {
            width: 48%;
        }

        .form-section {
            margin-bottom: 20px;
            width: 100%;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Additional styles or overrides as needed */
    </style>
</head>

<body>

    <nav>
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <a href="#">Why Coding</a>
    </nav>

    <div class="container">
        <form method="post" action="{{ route('update.quizPairMatching',['id' => $page->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-section">
                {{-- <label for="quizmultiplechoices"></label>
                <input type="hidden" name="adminPage_id" value="{{$data}}">
                <label for="page_type"></label>
                <input type="hidden" name="page_type" value="Quiz4Matching"> --}}
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{$page->title}}" required>
            </div>

            <div class="form-section">
                <label for="description">Description:</label>
                <textarea name="description" id="editor" >{{$page->description}}</textarea>
            </div>

            <div class="form-section">
                <label for="order">Order:</label>
                <input type="number" id="order" name="order" value="{{$page->order}}"  required>
            </div>

            <h2>Pairs:</h2>

            <div class="pair-container">
                <input type="text" placeholder="Left Item 1" name="leftItem1" value="{{$page->left_item1}}" required>
                <input type="text" placeholder="Right Item 1" name="rightItem1" value="{{$page->right_item1}}" required>
            </div>

            <div class="pair-container">
                <input type="text" placeholder="Left Item 2" name="leftItem2" value="{{$page->left_item2}}" required>
                <input type="text" placeholder="Right Item 2" name="rightItem2" value="{{$page->right_item2}}" required>
            </div>

            <div class="pair-container">
                <input type="text" placeholder="Left Item 3" name="leftItem3" value="{{$page->left_item3}}" required>
                <input type="text" placeholder="Right Item 3" name="rightItem3" value="{{$page->right_item3}}" required>
            </div>

            <div class="pair-container">
                <input type="text" placeholder="Left Item 4" name="leftItem4" value="{{$page->left_item4}}" required>
                <input type="text" placeholder="Right Item 4" name="rightItem4" value="{{$page->right_item4}}" required>
            </div>

            <button type="submit">Submit</button>
        </form>

    
        <!-- Additional content as needed -->
    </div>

    <!-- Your scripts or external scripts here -->
 

</body>

</html>
