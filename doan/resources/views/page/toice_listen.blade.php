
<!-- css -->
<link rel="stylesheet" href="FE/css/toeic_listen.css" />
@extends(layouts.layout)
@section('content')
<div class="TOEIC-Listening"><h1> TOEIC Listening </h1></div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown1')">Practice Test 1 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown1">
        <a href=""><button class="exercise-button">Conversation: Changing currency</button></a>
        <a href=""><button class="exercise-button">Conversation: Booking a taxi</button></a>
        <a href=""><button class="exercise-button">Conversation: Buying a microwave</button></a>
        <a href=""><button class="exercise-button">Conversation: Slow Internet</button></a>
        <a href=""><button class="exercise-button">Conversation: Renting a car</button></a>
        <a href=""><button class="exercise-button">Conversation: At the doctor's office</button></a>
        <a href=""><button class="exercise-button">Conversation: Credit card lost</button></a>
        <a href=""><button class="exercise-button">Conversation: Home repair service</button></a>
        <a href=""><button class="exercise-button">Conversation: Real estate questions</button></a>
        <a href=""><button class="exercise-button">Conversation: Reporting a robbery</button></a>
        <a href=""><button class="exercise-button">Short Talk: Weather report</button></a>
        <a href=""><button class="exercise-button">Short Talk: Sale announcement</button></a>
        <a href=""><button class="exercise-button">Short Talk: New blender purchase</button></a>
        <a href=""><button class="exercise-button">Short Talk: Flight update</button></a>
        <a href=""><button class="exercise-button">Short Talk: Flood warning</button></a>
        <a href=""><button class="exercise-button">Short Talk: Organic honey</button></a>
        <a href=""><button class="exercise-button">Short Talk: Train delay</button></a>
        <a href=""><button class="exercise-button">Short Talk: Adopting a pet</button></a>
        <a href=""><button class="exercise-button">Short Talk: Landlord's reminder</button></a>
        <a href=""><button class="exercise-button">Short talk: Yoga class rescheduled</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>

<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown2')">Practice Test 2 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown2">
        <a href=""><button class="exercise-button">Conversation: Restaurant recommendation</button></a>
        <a href=""><button class="exercise-button">Conversation: Maintenance request</button></a>
        <a href=""><button class="exercise-button">Conversation: Scheduling medical check-up</button></a>
        <a href=""><button class="exercise-button">Conversation: University requirements</button></a>
        <a href=""><button class="exercise-button">Conversation: Market research survey</button></a>
        <a href=""><button class="exercise-button">Conversation: Customer loyalty program</button></a>
        <a href=""><button class="exercise-button">Conversation: Office holiday schedule</button></a>
        <a href=""><button class="exercise-button">Conversation: Company policy update</button></a>
        <a href=""><button class="exercise-button">Conversation: Team building activity</button></a>
        <a href=""><button class="exercise-button">Conversation: Travel reimbursement request</button></a>
        <a href=""><button class="exercise-button">Short Talk: Road closure report</button></a>
        <a href=""><button class="exercise-button">Short Talk: Local charity run</button></a>
        <a href=""><button class="exercise-button">Short Talk: Unusual water usage</button></a>
        <a href=""><button class="exercise-button">Short Talk: Library mistake</button></a>
        <a href=""><button class="exercise-button">Short Talk: A blood drive</button></a>
        <a href=""><button class="exercise-button">Short Talk: Nurses' complaints</button></a>
        <a href=""><button class="exercise-button">Short Talk: Police warning</button></a>
        <a href=""><button class="exercise-button">Short Talk: Hotel services</button></a>
        <a href=""><button class="exercise-button">Short Talk: The Great Wall of China</button></a>
        <a href=""><button class="exercise-button">Short Talk: Rescheduled meeting</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown3')">Practice Test 3 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown3">
        <a href=""><button class="exercise-button">Conversation 1</button></a>
        <a href=""><button class="exercise-button">Conversation 2</button></a>
        <a href=""><button class="exercise-button">Conversation 3</button></a>
        <a href=""><button class="exercise-button">Conversation 4</button></a>
        <a href=""><button class="exercise-button">Conversation 5</button></a>
        <a href=""><button class="exercise-button">Conversation 6</button></a>
        <a href=""><button class="exercise-button">Conversation 7</button></a>
        <a href=""><button class="exercise-button">Conversation 8</button></a>
        <a href=""><button class="exercise-button">Conversation 9</button></a>
        <a href=""><button class="exercise-button">Conversation 10</button></a>
        <a href=""><button class="exercise-button">Short Talk 1</button></a>
        <a href=""><button class="exercise-button">Short Talk 2</button></a>
        <a href=""><button class="exercise-button">Short Talk 3</button></a>
        <a href=""><button class="exercise-button">Short Talk 4</button></a>
        <a href=""><button class="exercise-button">Short Talk 5</button></a>
        <a href=""><button class="exercise-button">Short Talk 6</button></a>
        <a href=""><button class="exercise-button">Short Talk 7</button></a>
        <a href=""><button class="exercise-button">Short Talk 8</button></a>
        <a href=""><button class="exercise-button">Short Talk 9</button></a>
        <a href=""><button class="exercise-button">Short Talk 10</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown4')">Practice Test 4 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown4">
        <a href=""><button class="exercise-button">Conversation 11</button></a>
        <a href=""><button class="exercise-button">Conversation 12</button></a>
        <a href=""><button class="exercise-button">Conversation 13</button></a>
        <a href=""><button class="exercise-button">Conversation 14</button></a>
        <a href=""><button class="exercise-button">Conversation 15</button></a>
        <a href=""><button class="exercise-button">Conversation 16</button></a>
        <a href=""><button class="exercise-button">Conversation 17</button></a>
        <a href=""><button class="exercise-button">Conversation 18</button></a>
        <a href=""><button class="exercise-button">Conversation 19</button></a>
        <a href=""><button class="exercise-button">Conversation 20</button></a>
        <a href=""><button class="exercise-button">Short Talk 11</button></a>
        <a href=""><button class="exercise-button">Short Talk 12</button></a>
        <a href=""><button class="exercise-button">Short Talk 13</button></a>
        <a href=""><button class="exercise-button">Short Talk 14</button></a>
        <a href=""><button class="exercise-button">Short Talk 15</button></a>
        <a href=""><button class="exercise-button">Short Talk 16</button></a>
        <a href=""><button class="exercise-button">Short Talk 17</button></a>
        <a href=""><button class="exercise-button">Short Talk 18</button></a>
        <a href=""><button class="exercise-button">Short Talk 19</button></a>
        <a href=""><button class="exercise-button">Short Talk 20</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown5')">Practice Test 5 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown5">
        <a href=""><button class="exercise-button">Conversation 21</button></a>
        <a href=""><button class="exercise-button">Conversation 22</button></a>
        <a href=""><button class="exercise-button">Conversation 23</button></a>
        <a href=""><button class="exercise-button">Conversation 24</button></a>
        <a href=""><button class="exercise-button">Conversation 25</button></a>
        <a href=""><button class="exercise-button">Conversation 26</button></a>
        <a href=""><button class="exercise-button">Conversation 27</button></a>
        <a href=""><button class="exercise-button">Conversation 28</button></a>
        <a href=""><button class="exercise-button">Conversation 29</button></a>
        <a href=""><button class="exercise-button">Conversation 30</button></a>
        <a href=""><button class="exercise-button">Short Talk 21</button></a>
        <a href=""><button class="exercise-button">Short Talk 22</button></a>
        <a href=""><button class="exercise-button">Short Talk 23</button></a>
        <a href=""><button class="exercise-button">Short Talk 24</button></a>
        <a href=""><button class="exercise-button">Short Talk 25</button></a>
        <a href=""><button class="exercise-button">Short Talk 26</button></a>
        <a href=""><button class="exercise-button">Short Talk 27</button></a>
        <a href=""><button class="exercise-button">Short Talk 28</button></a>
        <a href=""><button class="exercise-button">Short Talk 29</button></a>
        <a href=""><button class="exercise-button">Short Talk 30</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown6')">Practice Test 6 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown6">
        <a href=""><button class="exercise-button">Conversation 31</button></a>
        <a href=""><button class="exercise-button">Conversation 32</button></a>
        <a href=""><button class="exercise-button">Conversation 33</button></a>
        <a href=""><button class="exercise-button">Conversation 34</button></a>
        <a href=""><button class="exercise-button">Conversation 35</button></a>
        <a href=""><button class="exercise-button">Conversation 36</button></a>
        <a href=""><button class="exercise-button">Conversation 37</button></a>
        <a href=""><button class="exercise-button">Conversation 38</button></a>
        <a href=""><button class="exercise-button">Conversation 39</button></a>
        <a href=""><button class="exercise-button">Conversation 40</button></a>
        <a href=""><button class="exercise-button">Short Talk 31</button></a>
        <a href=""><button class="exercise-button">Short Talk 32</button></a>
        <a href=""><button class="exercise-button">Short Talk 33</button></a>
        <a href=""><button class="exercise-button">Short Talk 34</button></a>
        <a href=""><button class="exercise-button">Short Talk 35</button></a>
        <a href=""><button class="exercise-button">Short Talk 36</button></a>
        <a href=""><button class="exercise-button">Short Talk 37</button></a>
        <a href=""><button class="exercise-button">Short Talk 38</button></a>
        <a href=""><button class="exercise-button">Short Talk 39</button></a>
        <a href=""><button class="exercise-button">Short Talk 40</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown7')">Practice Test 7 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown7">
        <a href=""><button class="exercise-button">Conversation 51</button></a>
        <a href=""><button class="exercise-button">Conversation 52</button></a>
        <a href=""><button class="exercise-button">Conversation 53</button></a>
        <a href=""><button class="exercise-button">Conversation 54</button></a>
        <a href=""><button class="exercise-button">Conversation 55</button></a>
        <a href=""><button class="exercise-button">Conversation 56</button></a>
        <a href=""><button class="exercise-button">Conversation 57</button></a>
        <a href=""><button class="exercise-button">Conversation 58</button></a>
        <a href=""><button class="exercise-button">Conversation 59</button></a>
        <a href=""><button class="exercise-button">Conversation 60</button></a>
        <a href=""><button class="exercise-button">Short Talk 51</button></a>
        <a href=""><button class="exercise-button">Short Talk 52</button></a>
        <a href=""><button class="exercise-button">Short Talk 53</button></a>
        <a href=""><button class="exercise-button">Short Talk 54</button></a>
        <a href=""><button class="exercise-button">Short Talk 55</button></a>
        <a href=""><button class="exercise-button">Short Talk 56</button></a>
        <a href=""><button class="exercise-button">Short Talk 57</button></a>
        <a href=""><button class="exercise-button">Short Talk 58</button></a>
        <a href=""><button class="exercise-button">Short Talk 59</button></a>
        <a href=""><button class="exercise-button">Short Talk 60</button></a>
        <!-- Thêm các bài tập khác -->
    </div>
</div>
<div class="dropdown-container">
    <button class="dropdown-button" onclick="toggleDropdown('dropdown8')">Practice Test 1 (20 bài tập)</button>
    <div class="dropdown-content" id="dropdown8">
        <a href=""><button class="exercise-button">Conversation: Changing currency</button></a>
        <a href=""><button class="exercise-button">Conversation: Booking a taxi</button></a>
        <a href=""><button class="exercise-button">Conversation: Buying a microwave</button></a>
        <a href=""><button class="exercise-button">Conversation: Slow Internet</button></a>
        <a href=""><button class="exercise-button">Conversation: Renting a car</button></a>
        <a href=""><button class="exercise-button">Conversation: At the doctor's office</button></a>
        <a href=""><button class="exercise-button">Conversation: Credit card lost</button></a>
        <a href=""><button class="exercise-button">Conversation: Home repair service</button></a>
        <a href=""><button class="exercise-button">Conversation: Real estate questions</button></a>
        <a href=""><button class="exercise-button">Conversation: Reporting a robbery</button></a>
        <a href=""><button class="exercise-button">Short Talk: Weather report</button></a>
        <a href=""><button class="exercise-button">Short Talk: Sale announcement</button></a>
        <a href=""><button class="exercise-button">Short Talk: New blender purchase</button></a>
        <a href=""><button class="exercise-button">Short Talk: Flight update</button></a>
        <a href=""><button class="exercise-button">Short Talk: Flood warning</button></a>
        <a href=""><button class="exercise-button">Short Talk: Organic honey</button></a>
        <a href=""><button class="exercise-button">Short Talk: Train delay</button></a>
        <a href=""><button class="exercise-button">Short Talk: Adopting a pet</button></a>
        <a href=""><button class="exercise-button">Short Talk: Landlord's reminder</button></a>
        <a href=""><button class="exercise-button">Short talk: Yoga class rescheduled</button></a>
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
