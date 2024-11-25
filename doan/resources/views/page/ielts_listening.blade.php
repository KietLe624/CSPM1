<link rel="stylesheet" href="FE/css/ielts_listen.css" />
@extends(layouts.layout)
@section('content')
<div class="TOEIC-Listening"><h1> TOEIC Listening </h1></div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown10')">Cam 2 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown10">
                <a href=""><button class="exercise-button">Cam 2 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 2 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown11')">Cam 3 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown11">
                <a href=""><button class="exercise-button">Cam 3 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 3 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown12')">Cam 4 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown12">
                <a href=""><button class="exercise-button">Cam 4 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 4 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown13')">Cam 5 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown13">
                <a href=""><button class="exercise-button">Cam 5 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 5- Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 5- Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 5  - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 5 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown14')">Cam 6 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown14">
                <a href=""><button class="exercise-button">Cam 6 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 6- Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 6- Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 6 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown15')">Cam 7 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown15>
                <a href=""><button class="exercise-button">Cam 7 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 7 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 7  - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown16')">Cam 8 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown16">
                <a href=""><button class="exercise-button">Cam 8 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 8 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown('dropdown17')">Cam 9 (16 bài tập)</button>
            <div class="dropdown-content" id="dropdown17">
                <a href=""><button class="exercise-button">Cam 9 - Test 1 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 1 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 1 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 1 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 2 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 2 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 2 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 2 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 3 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 3 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 3 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 3 - Part 4</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 4 - Part 1</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 4 - Part 2</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 4 - Part 3</button></a>
                <a href=""><button class="exercise-button">Cam 9 - Test 4 - Part 4</button></a>
                
                <!-- Thêm các bài tập khác -->
            </div>
        </div>
        <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            if (dropdown.style.display === "none" || dropdown.style.display === "") {
                dropdown.style.display = "grid"; // Hiển thị theo dạng lưới
            } else {
                dropdown.style.display = "none"; // Ẩn đi
            }
        }
        </script>
        

@endsection
