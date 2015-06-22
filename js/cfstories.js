var output = '';
var cfstory;

function print(output){
  var outputDiv = document.getElementsByClassName('cts');
  outputDiv.innerHTML = output;
}

for (var i = 0; i < cfstories.length; i++) {
  cfstory = cfstories[i];
  output += '<li>';
  output += '<a href="campfire/'+cfstory.title+'">';
  output += '<figure>';
  output += '<img src="' + cfstory.image + '" alt="' + cfstory.location +'">';
  output += '<figcaption>' + cfstory.name + '</figcaption>';
  output += '</figure>';
  output += '</a>';
  output += '</li>';
  }
document.write(output);
