<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  function sendMessage() {
    // Get the input message
    var inputMessage = $('.message-input').val();

    // Append the user's message to the message list
    var messageList = $('.message-list');
    var userMessage = $('<li>').text('User: ' + inputMessage);
    messageList.append(userMessage);

    // Clear the input field
    $('.message-input').val('');

    // Make an AJAX request to the PHP server
    $.ajax({
      type: 'POST',
      url: '<?php echo dirname($_SERVER['PHP_SELF']) . '/chatProccess.php' ?>',
      data: { message: inputMessage },
      dataType: 'json',
      success: function (botResponse) {
        // Append the chatbot's response to the message list
        var botMessage = $('<li>').text('Chatbot: ');

        // Append additional information if available
        if (botResponse.values) {
          var valuesString = '';
          $.each(botResponse.values, function(key, value) {
            valuesString += value + ', ';
          });
          valuesString = valuesString.slice(0, -2); // Remove the trailing comma and space
          botMessage.text(botMessage.text() + valuesString);
        }

        messageList.append(botMessage);
        var tnxmsg = $('<li>').text('si vous aver une autre question!');
        messageList.append(tnxmsg);
      },
      error: function () {
        // Handle errors if needed
      }
    });
  }
</script>



<div class="chat d-none" id='dialogue'>
  <div class="chat-header">Rent it Chat
    <div id="dialoguef" class="d-none">
      <button class="cat-close-button" onclick="closeDialogue()">
      <i class="bi bi-x-lg"></i>
        <div class="close-div">Close</div>
    </div>
    </button>
  </div>
  <div class="chat-window">
    <ul class="message-list"></ul>
  </div>
  <div class="chat-input">
    <input type="text" class="message-input" placeholder="Entrer le message">
    <button class="send-button" id="send-button" onclick="sendMessage()">↑</button>
  </div>
</div>