var jade = require('jade');

options = {filename:"jade_example",self:"true"};

locals = "";

var result = jade.compile('div jade', options);

var html = result(locals);

console.log(html);