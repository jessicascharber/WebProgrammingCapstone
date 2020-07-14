var d = new Date();
var time = d.getHours();
var r=Math.random();

if (time<12)
{
  if (r>0.5)
  {
    document.write("<h1><b>Good Morning!</h1></b>");
  }
  else
  {
    document.write("<h1>It's going to be a great day at Camp Lake Cabin!</h1>");
  }
}
else if (time>=12 && time<18)
{
  if (r>0.5)
  {
    document.write("<h1><b>Good Afternoon!</h1></b>");
  }
  else
  {
    document.write("<h1>It's a great day at Camp Lake Cabin!</h1>");
  }
}
else
{
  if (r>0.5)
  {
    document.write("<h1><b>Good Night!</h1></b>");
  }
  else
  {
    document.write("<h1>It a has been a lovely day at the lake!</h1>");
  }
}
