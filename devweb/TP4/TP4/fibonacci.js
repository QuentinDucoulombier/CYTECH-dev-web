

  n = prompt("saisissez un rang");
  m = n
  d = new Date();
  document.writeln("<head><meta charset='utf-8'>");
  document.writeln("<link rel='stylesheet' type='text/css' href='fibonacci.css'/></head>");
  document.writeln("<h1>Suite de Fibonnaci</h1>");
  document.writeln("<div id='reponse'>");
  document.writeln("<p>");
  document.writeln("A " + (d.getHours()) + "h" + (d.getMinutes())+ ",");
  document.writeln("<br />")
  document.writeln("Le " + m + "<sup>e</sup> termes de Fibonnaci est <strong>" + fibonacci(n) ) + "</strong>";
  document.writeln("</p>");
  document.writeln("</div>");


function fibonacci(n)
{
  if(n < 2)
  {
    return n;
  }
  else
  {
    return fibonacci(n - 1) + fibonacci(n - 2);
  }
}
