<link rel="stylesheet" href="FE/css/learning.css">
@extends(layouts.layout)
@section('content')
<div class="container">
    <header class="progress">
      <span>3 / 21</span>
    </header>
    <div class="audio-section">
      <audio controls>
        <source src="audio-file.mp3" type="audio/mp3">
        Your browser does not support the audio element.
      </audio>
    </div>
    <div class="input-section">
      <input type="text" placeholder="Type what you hear..." />
      <span class="microphone">&#127908;</span> <!-- Microphone icon -->
    </div>
    <div class="buttons">
      <button class="check-btn">Check</button>
      <button class="skip-btn">Skip</button>
    </div>
  </div>
@endsection