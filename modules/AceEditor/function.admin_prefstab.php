<?php
#-------------------------------------------------------------------------
# Module: AceEditor - Syntax highlighting editor http://ace.ajax.org/.
# Version: 0.2.3, Goran Ilic uniqu3e@gmail.com http://www.ich-mach-das.at
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2007 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------

#-------------------------------------------------------------------------
# For Help building modules:
# - Read the Documentation as it becomes available at
#   http://dev.cmsmadesimple.org/
# - Check out the Skeleton Module for a commented example
# - Look at other modules, and learn from the source
# - Check out the forums at http://forums.cmsmadesimple.org
# - Chat with developers on the #cms IRC channel
#-------------------------------------------------------------------------

if (isset($params['example_syntax'])) {
	cms_userprefs::set_for_user($userid, $this->GetName() . '_example_syntax', $params['example_syntax']);
}
$smarty->assign('startform', $this->CreateFormStart($id, 'savesettings', $returnid));
$smarty->assign('endform', $this->CreateFormEnd());


$smarty->assign('width_input', $this->CreateInputText($id, 'width', cms_userprefs::get_for_user($userid, $this->GetName() . '_width', '80'), 10, 255));
$smarty->assign('height_input', $this->CreateInputText($id, 'height', cms_userprefs::get_for_user($userid, $this->GetName() . '_height', '40'), 10, 255));
// create a IE pref, DONT WANT TO SEE A BR FOR THIS SHIT!
$smarty->assign('enable_ieinput', $this->CreateInputCheckbox($id, 'enable_ie', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_enable_ie', 0)));

/* mode dropdown */
$modes = array(
	$this->Lang('js') => 'javascript',
	$this->Lang('plain') => 'plain',
	$this->Lang('svg') => 'svg',
	$this->Lang('html') => 'html',
	$this->Lang('css') => 'css',
	$this->Lang('scss') => 'scss',
	$this->Lang('coffee') => 'coffee',
	$this->Lang('json') => 'json',
	$this->Lang('python') => 'python',
	$this->Lang('ruby') => 'ruby',
	$this->Lang('perl') => 'perl',
	$this->Lang('php') => 'php',
	$this->Lang('java') => 'java',
	$this->Lang('csharp') => 'csharp',
	$this->Lang('c_cpp') => 'c_cpp',
	$this->Lang('clojure') => 'clojure',
	$this->Lang('coldfusion') => 'coldfusion',
	$this->Lang('diff') => 'diff',
	$this->Lang('haxe') => 'haxe',
	$this->Lang('latex') => 'latex',
	$this->Lang('lua') => 'lua',
	$this->Lang('markdown') => 'markdown',
	$this->Lang('powershell') => 'powershell',
	$this->Lang('sql') => 'sql',
	$this->Lang('pgsql') => 'pgsql',
	$this->Lang('ocaml') => 'ocaml',
	$this->Lang('textile') => 'textile',
	$this->Lang('groovy') => 'groovy',
	$this->Lang('golang') => 'golang',
	$this->Lang('jsx') => 'jsx',
	$this->Lang('less') => 'less',
	$this->Lang('liquid') => 'liquid',
	$this->Lang('scad') => 'scad',
	$this->Lang('sh') => 'sh',
	$this->Lang('xquery') => 'xquery',
	$this->Lang('yaml') => 'yaml',
	$this->Lang('scala') => 'scala'
);
$smarty->assign('syntax_modeinput', $this->CreateInputDropdown($id, 'mode', $modes, -1, cms_userprefs::get_for_user($userid, $this->GetName() . '_mode', 'html'), 'onchange="this.form.submit()"'));

/* themes */
$themes = array(
    $this->Lang('ambiance') => 'ambiance',
	$this->Lang('chrome') => 'chrome',
	$this->Lang('clouds') => 'clouds',
	$this->Lang('clouds_midnight') => 'clouds_midnight',
	$this->Lang('cobalt') => 'cobalt',
	$this->Lang('crimson_editor') => 'crimson_editor',
	$this->Lang('dawn') => 'dawn',
	$this->Lang('dreamweaver') => 'dreamweaver',
	$this->Lang('eclipse') => 'eclipse',
	$this->Lang('idle_fingers') => 'idle_fingers',
	$this->Lang('kr_theme') => 'kr_theme',
	$this->Lang('merbivore') => 'merbivore',
	$this->Lang('merbivore_soft') => 'merbivore_soft',
	$this->Lang('mono_industrial') => 'mono_industrial',
	$this->Lang('monokai') => 'monokai',
	$this->Lang('pastel_on_dark') => 'pastel_on_dark',
	$this->Lang('solarized_dark') => 'solarized_dark',
	$this->Lang('solarized_light') => 'solarized_light',
	$this->Lang('textmate') => 'textmate',
	$this->Lang('tomorrow') => 'tomorrow',
	$this->Lang('tomorrow_night') => 'tomorrow_night',
	$this->Lang('tomorrow_night_blue') => 'tomorrow_night_blue',
	$this->Lang('tomorrow_night_bright') => 'tomorrow_night_bright',
	$this->Lang('tomorrow_night_eighties') => 'tomorrow_night_eighties',
	$this->Lang('twilight') => 'twilight',
	$this->Lang('vibrant_ink') => 'vibrant_ink'
);
$smarty->assign('themeinput', $this->CreateInputDropdown($id, 'theme', $themes, -1, cms_userprefs::get_for_user($userid, $this->GetName() . '_theme', 'textmate'), 'onchange="this.form.submit()"'));

/* font size */
$fonts = array(
	'10px' => '10px',
	'11px' => '11px',
	'12px' => '12px',
	'14px' => '14px',
	'16px' => '16px',
	'20px' => '20px',
	'24px' => '24px'
);
$smarty->assign('fontsizeinput', $this->CreateInputDropdown($id, 'fontsize', $fonts, -1, cms_userprefs::get_for_user($userid, $this->GetName() . '_fontsize', '12px')));

$smarty->assign('full_lineinput', $this->CreateInputCheckbox($id, 'full_line', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_full_line', 1)));
$smarty->assign('highlight_activeinput', $this->CreateInputCheckbox($id, 'highlight_active', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_highlight_active', 1)));
$smarty->assign('show_invisiblesinput', $this->CreateInputCheckbox($id, 'show_invisibles', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_show_invisibles', 0)));
$smarty->assign('persistent_hscrollinput', $this->CreateInputCheckbox($id, 'persistent_hscroll', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_persistent_hscroll', 1)));

/* text wrapping */
$soft_wrap = array(
	$this->Lang('off') => 'off',
	$this->Lang('40') => '40,40',
	$this->Lang('80') => '80,80',
	$this->Lang('100') => '100,100',
	$this->Lang('140') => '140,140'
);
$smarty->assign('soft_wrapinput', $this->CreateInputDropdown($id, 'soft_wrap', $soft_wrap, -1, cms_userprefs::get_for_user($userid, $this->GetName() . '_soft_wrap', '80,80')));

$smarty->assign('show_gutterinput', $this->CreateInputCheckbox($id, 'show_gutter', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_show_gutter', 1)));
$smarty->assign('print_margininput', $this->CreateInputCheckbox($id, 'print_margin', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_print_margin', 0)));
$smarty->assign('soft_tabinput', $this->CreateInputCheckbox($id, 'soft_tab', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_soft_tab', 1)));
$smarty->assign('highlight_selectedinput', $this->CreateInputCheckbox($id, 'highlight_selected', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_highlight_selected', 1)));
$smarty->assign('behaviours_input', $this->CreateInputCheckbox($id, 'enable_behaviors', 1, cms_userprefs::get_for_user($userid, $this->GetName() . '_enable_behaviors', 1)));

$smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->Lang('savesettings')));

/* sample content */
$syntax_content = '';
switch (cms_userprefs::get_for_user($userid, $this->GetName() . '_mode', 'html')) {
	case 'html': {
		$syntax_content = <<<EOT
<html>
<head>

<style type="text/css">
.text-layer {
    font-family: Monaco, "Courier New", monospace;
    font-size: 12px;
    cursor: text;
}
</style>

</head>
<body>
    <h1 style="color:red">Juhu Kinners</h1>
</body>
</html>
EOT;
		break;
	}
	case 'css': {
		$syntax_content = <<<EOT
.text-layer {
    font-family: Monaco, "Courier New", monospace;
    font-size: 12px;
    cursor: text;
}
EOT;
		break;
	}
	case 'javascript': {
		$syntax_content = <<<EOT
function foo(items) {
    for (var i=0; i<items.length; i++) {
        alert(items[i] + "juhu");
    }   // Real Tab.
}
EOT;
		break;
	}
	case 'plain': {
		$syntax_content = <<<EOT
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
EOT;
		break;
	}
	case 'svg': {
		$syntax_content = <<<EOT
<svg
  width="800" height="600"
  xmlns="http://www.w3.org/2000/svg"
  onload="StartAnimation(evt)">

  <title>Test Tube Progress Bar</title>
  <desc>Created for the Web Directions SVG competition</desc>

  <script type="text/ecmascript"><![CDATA[
    var timevalue = 0;
    var timer_increment = 1;
    var max_time = 100;
    var hickory;
    var dickory;
    var dock;
    var i;

    function StartAnimation(evt) {
        hickory  = evt.target.ownerDocument.getElementById("hickory");
        dickory = evt.target.ownerDocument.getElementById("dickory");
        dock = evt.target.ownerDocument.getElementById("dock");

        ShowAndGrowElement();
    }
    function ShowAndGrowElement() {
        timevalue = timevalue + timer_increment;
        if (timevalue > max_time)
            return;
        // Scale the text string gradually until it is 20 times larger
        scalefactor = (timevalue * 650) / max_time;

        if (timevalue < 30) {
            hickory.setAttribute("display", "");
            hickory.setAttribute("transform", "translate(" + (600+scalefactor*3*-1 ) + ", -144 )");
        }

        if (timevalue > 30 && timevalue < 66) {
            dickory.setAttribute("display", "");
            dickory.setAttribute("transform", "translate(" + (-795+scalefactor*2) + ", 0 )");
        }
        if (timevalue > 66) {
            dock.setAttribute("display", "");
            dock.setAttribute("transform", "translate(" + (1450+scalefactor*2*-1) + ", 144 )");
        }

        // Call ShowAndGrowElement again <timer_increment> milliseconds later.
        setTimeout("ShowAndGrowElement()", timer_increment)
    }
    window.ShowAndGrowElement = ShowAndGrowElement
  ]]></script>

  <rect
    fill="#2e3436"
    fill-rule="nonzero"
    stroke-width="3"
    y="0"
    x="0"
    height="600"
    width="800"
    id="rect3590"/>

    <text
       style="font-size:144px;font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;fill:#000000;fill-opacity:1;stroke:none;font-family:Bitstream Vera Sans;-inkscape-font-specification:Bitstream Vera Sans Bold"
       x="50"
       y="350"
       id="hickory"
       display="none">
        Hickory,</text>
    <text
       style="font-size:144px;font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;fill:#000000;fill-opacity:1;stroke:none;font-family:Bitstream Vera Sans;-inkscape-font-specification:Bitstream Vera Sans Bold"
       x="50"
       y="350"
       id="dickory"
       display="none">
        dickory,</text>
    <text
       style="font-size:144px;font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;fill:#000000;fill-opacity:1;stroke:none;font-family:Bitstream Vera Sans;-inkscape-font-specification:Bitstream Vera Sans Bold"
       x="50"
       y="350"
       id="dock"
       display="none">
        dock!</text>
</svg>
EOT;
		break;
	}
	case 'scss': {
		$syntax_content = <<<EOT
/* style.scss */

#navbar {
    \$navbar-width: 800px;
    \$items: 5;
    \$navbar-color: #ce4dd6;

    width: \$navbar-width;
    border-bottom: 2px solid \$navbar-color;

    li {
        float: left;
        width: \$navbar-width/\$items - 10px;

        background-color: lighten(\$navbar-color, 20%);
        &:hover {
            background-color: lighten(\$navbar-color, 10%);
        }
    }
}
EOT;
		break;
	}
	case 'coffee': {
		$syntax_content = <<<EOT
#!/usr/bin/env coffee

try
    throw URIError decodeURI(0xC0ffee * 123456.7e-8 / .9)
catch e
    console.log 'qstring' + "qqstring" + '''
        qdoc
    ''' + """
        qqdoc
    """

do ->
    ###
    herecomment
    ###
    re = /regex/imgy.test ///
        heregex  # comment
    ///imgy
    this isnt: `just JavaScript`
    undefined               
EOT;
		break;
	}
	case 'json': {
		$syntax_content = <<<EOT
{
 "query": {
  "count": 10,
  "created": "2011-06-21T08:10:46Z",
  "lang": "en-US",
  "results": {
   "photo": [
    {
     "farm": "6",
     "id": "5855620975",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "f1f5e8515d",
     "server": "5110",
     "title": "7087 bandit cat"
    },
    {
     "farm": "4",
     "id": "5856170534",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "ff1efb2a6f",
     "server": "3217",
     "title": "6975 rusty cat"
    },
    {
     "farm": "6",
     "id": "5856172972",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "51249875@N03",
     "secret": "6c6887347c",
     "server": "5192",
     "title": "watermarked-cats"
    },
    {
     "farm": "6",
     "id": "5856168328",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "0c1cfdf64c",
     "server": "5078",
     "title": "7020 mandy cat"
    },
    {
     "farm": "3",
     "id": "5856171774",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "7f5a3180ab",
     "server": "2696",
     "title": "7448 bobby cat"
    }
   ]
  }
 }
}
EOT;
		break;
	}
	case 'python': {
		$syntax_content = <<<EOT
#!/usr/local/bin/python

import string, sys

# If no arguments were given, print a helpful message
if len(sys.argv)==1:
    print 'Usage: celsius temp1 temp2 ...'
    sys.exit(0)

# Loop over the arguments
for i in sys.argv[1:]:
    try:
        fahrenheit=float(string.atoi(i))
    except string.atoi_error:
        print repr(i), "not a numeric value"  
    else:
        celsius=(fahrenheit-32)*5.0/9.0
        print '%i\\260F = %i\\260C' % (int(fahrenheit), int(celsius+.5))
EOT;
		break;
	}
	case 'php': {
		$syntax_content = <<<EOT
<?php

function nfact(\$n) {
  if (\$n == 0) {
    return 1;
  }
  else {
    return \$n * nfact(\$n - 1);
  }
}

echo "\\n\\nPlease enter a whole number ... ";
\$num = trim(fgets(STDIN));

// ===== PROCESS - Determing the factorial of the input number =====
\$output = "\\n\\nFactorial " . \$num . " = " . nfact(\$num) . "\\n\\n";
echo \$output;

?>
EOT;
		break;
	}
	case 'ruby': {
		$syntax_content = <<<EOT
#!/usr/bin/ruby

# Program to find the factorial of a number
def fact(n)
    if n == 0
        1
    else
        n * fact(n-1)
    end
end

puts fact(ARGV[0].to_i)
EOT;
		break;
	}
	case 'perl': {
		$syntax_content = <<<EOT
#!/usr/bin/perl
use strict;
use warnings;
my \$num_primes = 0;
my @primes;

# Put 2 as the first prime so we won't have an empty array
\$primes[\$num_primes] = 2;
\$num_primes++;

MAIN_LOOP:
for my \$number_to_check (3 .. 200)
{
    for my \$p (0 .. (\$num_primes-1))
    {
        if (\$number_to_check % \$primes[\$p] == 0)
        {
            next MAIN_LOOP;
        }
    }

    # If we reached this point it means \$number_to_check is not
    # divisable by any prime number that came before it.
    \$primes[\$num_primes] = \$number_to_check;
    \$num_primes++;
}

for my \$p (0 .. (\$num_primes-1))
{
    print \$primes[\$p], ", ";
}
print "\\n";
EOT;
		break;
	}
	case 'java': {
		$syntax_content = <<<EOT
public class InfiniteLoop {

    /*
     * This will cause the program to hang...
     *
     * Taken from:
     * http://www.exploringbinary.com/java-hangs-when-converting-2-2250738585072012e-308/
     */
    public static void main(String[] args) {
        double d = Double.parseDouble("2.2250738585072012e-308");

        // unreachable code
        System.out.println("Value: " + d);
    }
}
EOT;
		break;
	}
	case 'csharp': {
		$syntax_content = <<<EOT
public void HelloWorld() {
   //Say Hello!
   Console.WriteLine("Hello World");
}               
EOT;
		break;
	}
	case 'c_cpp': {
		$syntax_content = <<<EOT
// compound assignment operators

#include <iostream>
using namespace std;

int main ()
{
    int a, b=3; /* foobar */
    a = b;
    a+=2; // equivalent to a=a+2
    cout << a;
    return 0;
}               
EOT;
		break;
	}
	case 'clojure': {
		$syntax_content = <<<EOT
(defn parting
  "returns a String parting in a given language"
  ([] (parting "World"))
  ([name] (parting name "en"))
  ([name language]
    ; condp is similar to a case statement in other languages.
    ; It is described in more detail later.
    ; It is used here to take different actions based on whether the
    ; parameter "language" is set to "en", "es" or something else.
    (condp = language
      "en" (str "Goodbye, " name)
      "es" (str "Adios, " name)
      (throw (IllegalArgumentException.
        (str "unsupported language " language))))))

(println (parting)) ; -> Goodbye, World
(println (parting "Mark")) ; -> Goodbye, Mark
(println (parting "Mark" "es")) ; -> Adios, Mark
(println (parting "Mark", "xy")) ; -> java.lang.IllegalArgumentException: unsupported language xy               
EOT;
		break;
	}
	case 'ocaml': {
		$syntax_content = <<<EOT
(*
 * Example of early return implementation taken from
 * http://ocaml.janestreet.com/?q=node/91
 *)

let with_return (type t) (f : _ -> t) =
  let module M =
     struct exception Return of t end
  in
  let return = { return = (fun x -> raise (M.Return x)); } in
  try f return with M.Return x -> x


(* Function that uses the 'early return' functionality provided by `with_return` *)
let sum_until_first_negative list =
  with_return (fun r ->
    List.fold list ~init:0 ~f:(fun acc x ->
      if x >= 0 then acc + x else r.return acc))                
EOT;
		break;
	}
	case 'textile': {
		$syntax_content = <<<EOT
h1. Textile document

h2. Heading Two

h3. A two-line
    header

h2. Another two-line
header

Paragraph:
one, two,
thee lines!

p(classone two three). This is a paragraph with classes

p(#id). (one with an id)

p(one two three#my_id). ..classes + id

* Unordered list
** sublist
* back again!
** sublist again..

# ordered

bg. Blockquote!
    This is a two-list blockquote..!                
EOT;
		break;
	}
	case 'groovy': {
		$syntax_content = <<<EOT

//http://groovy.codehaus.org/Concurrency+with+Groovy
import java.util.concurrent.atomic.AtomicInteger

def counter = new AtomicInteger()

synchronized out(message) {
    println(message)
}

def th = Thread.start {
    for( i in 1..8 ) {
        sleep 30
        out "thread loop \$i"
        counter.incrementAndGet()
    }
}

for( j in 1..4 ) {
    sleep 50
    out "main loop \$j"
    counter.incrementAndGet()
}

th.join()

assert counter.get() == 12            
EOT;
		break;
	}
	case 'scala': {
		$syntax_content = <<<EOT
//http://www.scala-lang.org/node/227
/* Defines a new method 'sort' for array objects */
object implicits extends Application {
  implicit def arrayWrapper[A : ClassManifest](x: Array[A]) =
    new {
      def sort(p: (A, A) => Boolean) = {
        util.Sorting.stableSort(x, p); x
      }
    }
  val x = Array(2, 3, 1, 4)
  println("x = "+ x.sort((x: Int, y: Int) => x < y))
}               
EOT;
		break;
	}
	case 'coldfusion': {
		$syntax_content = <<<EOT
<!--- hello world --->

<cfset welcome="Hello World!">

<cfoutput>#welcome#</cfoutput>                
EOT;
		break;
	}
	case 'lua': {
		$syntax_content = <<<EOT
--[[--
num_args takes in 5.1 byte code and extracts the number of arguments
from its function header.
--]]--

function int(t)
    return t:byte(1)+t:byte(2)*0x100+t:byte(3)*0x10000+t:byte(4)*0x1000000
end

function num_args(func)
    local dump = string.dump(func)
    local offset, cursor = int(dump:sub(13)), offset + 26
    --Get the params and var flag (whether there's a ... in the param)
    return dump:sub(cursor):byte(), dump:sub(cursor+1):byte()
end

-- Usage:
num_args(function(a,b,c,d, ...) end) -- return 4, 7

-- Python styled string format operator
local gm = debug.getmetatable("")

gm.__mod=function(self, other)
    if type(other) ~= "table" then other = {other} end
    for i,v in ipairs(other) do other[i] = tostring(v) end
    return self:format(unpack(other))
end

print([===[
    blah blah %s, (%d %d)
]===]%{"blah", num_args(int)})

--[=[--
table.maxn is deprecated, use # instead.
--]=]--
print(table.maxn{1,2,[4]=4,[8]=8) -- outputs 8 instead of 2                
EOT;
		break;
	}
	case 'haxe': {
		$syntax_content = <<<EOT
class Haxe 
{
    public static function main() 
    {
        // Say Hello!
        var greeting:String = "Hello World";
        trace(greeting);
        
        var targets:Array<String> = ["Flash","Javascript","PHP","Neko","C++","iOS","Android","webOS"];
        trace("Haxe is a great language that can target:");
        for (target in targets)
        {
            trace (" - " + target);
        }
        trace("And many more!");
    }
}                
EOT;
		break;
	}
	case 'markdown': {
		$syntax_content = <<<EOT
Ace (Ajax.org Cloud9 Editor)
============================

Ace is a standalone code editor written in JavaScript. Our goal is to create a browser based editor that matches and extends the features, usability and performance of existing native editors such as TextMate, Vim or Eclipse. It can be easily embedded in any web page or JavaScript application. Ace is developed as the primary editor for [Cloud9 IDE](http://www.cloud9ide.com/) and the successor of the Mozilla Skywriter (Bespin) Project.

Features
--------

* Syntax highlighting
* Automatic indent and outdent
* An optional command line
* Handles huge documents (100,000 lines and more are no problem)
* Fully customizable key bindings including VI and Emacs modes
* Themes (TextMate themes can be imported)
* Search and replace with regular expressions
* Highlight matching parentheses
* Toggle between soft tabs and real tabs
* Displays hidden characters
* Drag and drop text using the mouse
* Line wrapping
* Unstructured / user code folding
* Live syntax checker (currently JavaScript/CoffeeScript)                
EOT;
		break;
	}
	case 'sql': {
		$syntax_content = <<<EOT
SELECT city, COUNT(id) AS users_count
FROM users
WHERE group_name = \'salesman\'
AND created > \'2011-05-21\'
GROUP BY 1
ORDER BY 2 DESC
EOT;
		break;
	}
	case 'pgsql': {
		$syntax_content = <<<EOT
BEGIN;

/**
* Samples from PostgreSQL src/tutorial/basics.source
*/
CREATE TABLE weather (
    city        varchar(80),
    temp_lo     int,        -- low temperature
    temp_hi     int,        -- high temperature
    prcp        real,       -- precipitation
    "date"      date
);                
EOT;
		break;
	}
    case 'diff': {
        $syntax_content = <<<EOT
+var SearchHighlight = require("./search_highlight").SearchHighlight;
 
 /**
  * class EditSession
@@ -307,6 +308,13 @@ var EditSession = function(text, mode) {
         return token;
     };
 
+    this.highlight = function(re) {
+        if (!this.\$searchHighlight) {
+            var highlight = new SearchHighlight(null, "ace_selected_word", "text");
+            this.\$searchHighlight = this.addDynamicMarker(highlight);
+        }
+        this.\$searchHighlight.setRegexp(re);
+    }
     /**
     * EditSession.setUndoManager(undoManager)
     * - undoManager (UndoManager): The new undo manager
@@ -556,7 +564,8 @@ var EditSession = function(text, mode) {
             type : type || "line",
             renderer: typeof type == "function" ? type : null,
             clazz : clazz,
-            inFront: !!inFront
+            inFront: !!inFront,
+            id: id
         }
 
         if (inFront) {
diff --git a/lib/ace/editor.js b/lib/ace/editor.js
index 834e603..b27ec73 100644
--- a/lib/ace/editor.js
+++ b/lib/ace/editor.js
@@ -494,7 +494,7 @@ var Editor = function(renderer, session) {
      * Emitted when a selection has changed.
      **/
     this.onSelectionChange = function(e) {
-        var session = this.getSession();
+        var session = this.session;
 
         if (session.\$selectionMarker) {
             session.removeMarker(session.\$selectionMarker);
@@ -509,12 +509,40 @@ var Editor = function(renderer, session) {
             this.\$updateHighlightActiveLine();
         }
 
-        var self = this;
-        if (this.\$highlightSelectedWord && !this.\$wordHighlightTimer)
-            this.\$wordHighlightTimer = setTimeout(function() {
-                self.session.\$mode.highlightSelection(self);
-                self.\$wordHighlightTimer = null;
-            }, 30, this);
+        var re = this.\$highlightSelectedWord && this.\$getSelectionHighLightRegexp()
     };
diff --git a/lib/ace/search_highlight.js b/lib/ace/search_highlight.js
new file mode 100644
index 0000000..b2df779
--- /dev/null
+++ b/lib/ace/search_highlight.js
@@ -0,0 +1,3 @@
+new
+empty file        
EOT;
        break;
    }
    case 'golang': {
        $syntax_content = <<<EOT
// Concurrent computation of pi.
// See http://goo.gl/ZuTZM.
//
// This demonstrates Go's ability to handle
// large numbers of concurrent processes.
// It is an unreasonable way to calculate pi.
package main

import (
    "fmt"
    "math"
)

func main() {
    fmt.Println(pi(5000))
}

// pi launches n goroutines to compute an
// approximation of pi.
func pi(n int) float64 {
    ch := make(chan float64)
    for k := 0; k <= n; k++ {
        go term(ch, float64(k))
    }
    f := 0.0
    for k := 0; k <= n; k++ {
        f += <-ch
    }
    return f
}

func term(ch chan float64, k float64) {
    ch <- 4 * math.Pow(-1, k) / (2*k + 1)
}        
EOT;
        break;
    }
    case 'yaml': {
        $syntax_content = <<<EOT
# This sample document was taken from wikipedia:
# http://en.wikipedia.org/wiki/YAML#Sample_document
---
receipt:     Oz-Ware Purchase Invoice
date:        2007-08-06
customer:
    given:   Dorothy
    family:  Gale

items:
    - part_no:   'A4786'
      descrip:   Water Bucket (Filled)
      price:     1.47
      quantity:  4

    - part_no:   'E1628'
      descrip:   High Heeled "Ruby" Slippers
      size:      8
      price:     100.27
      quantity:  1

bill-to:  &id001
    street: |
            123 Tornado Alley
            Suite 16
    city:   East Centerville
    state:  KS

ship-to:  *id001

specialDelivery:  >
    Follow the Yellow Brick
    Road to the Emerald City.
    Pay no attention to the
    man behind the curtain.       
EOT;
        break;
    }
    case 'less': {
        $syntax_content = <<<EOT
    case 'xquery': {
        $syntax_content = <<<EOT
xquery version "1.0";

let \$message := "Hello World!"
return <results>
  <message>{\$message}</message>
</results>      
EOT;
        break;
    } 
    case 'scad': {
        $syntax_content = <<<EOT
// ace can highlight scad!
module Element(xpos, ypos, zpos){
    translate([xpos,ypos,zpos]){
        union(){
            cube([10,10,4],true);
            cylinder(10,15,5);
            translate([0,0,10])sphere(5);
        }
    }
}

union(){
    for(i=[0:30]){
        # Element(0,0,0);
        Element(15*i,0,0);
    }
}

for (i = [3, 5, 7, 11]){
    rotate([i*10,0,0])scale([1,1,i])cube(10);      
EOT;
        break;
    } 
    case 'sh': {
        $syntax_content = <<<EOT
#!/bin/sh

# Script to open a browser to current branch
# Repo formats:
# ssh   git@github.com:richoH/gh_pr.git
# http  https://richoH@github.com/richoH/gh_pr.git
# git   git://github.com/richoH/gh_pr.git

username=`git config --get github.user`

get_repo() {
    git remote -v | grep \${@:-\$username} | while read remote; do
      if repo=`echo \$remote | grep -E -o "git@github.com:[^ ]*"`; then
          echo \$repo | sed -e "s/^git@github\.com://" -e "s/\.git$//"
          exit 1
      fi
      if repo=`echo \$remote | grep -E -o "https?://([^@]*@)?github.com/[^ ]*\.git"`; then
          echo \$repo | sed -e "s|^https?://||" -e "s/^.*github\.com\///" -e "s/\.git$//"
          exit 1
      fi
      if repo=`echo \$remote | grep -E -o "git://github.com/[^ ]*\.git"`; then
          echo \$repo | sed -e "s|^git://github.com/||" -e "s/\.git$//"
          exit 1
      fi
    done

    if [ $? -eq 0 ]; then
        echo "Couldn't find a valid remote" >&2
        exit 1
    fi
}

if repo=`get_repo $@`; then
    branch=`git symbolic-ref HEAD 2>/dev/null`
    echo "http://github.com/\$repo/pull/new/\${branch##refs/heads/}"
else
    exit 1
fi      
EOT;
        break;
    } 
    case 'xquery': {
        $syntax_content = <<<EOT
xquery version "1.0";

let \$message := "Hello World!"
return <results>
  <message>{\$message}</message>
</results>      
EOT;
        break;
   }
    case 'latex': {
        $syntax_content = <<<EOT
\usepackage{amsmath}
\title{\LaTeX}
\date{}
\begin{document}
  \maketitle
  \LaTeX{} is a document preparation system for the \TeX{}
  typesetting program. It offers programmable desktop publishing
  features and extensive facilities for automating most aspects of
  typesetting and desktop publishing, including numbering and
  cross-referencing, tables and figures, page layout, bibliographies,
  and much more. \LaTeX{} was originally written in 1984 by Leslie
  Lamport and has become the dominant method for using \TeX; few
  people write in plain \TeX{} anymore. The current version  is
  \LaTeXe.
 
  % This is a comment; it will not be shown in the final output.
  % The following shows a little of the typesetting power of LaTeX:
  \begin{align}
    E &= mc^2                              \\
    m &= \frac{m_0}{\sqrt{1-\frac{v^2}{c^2}}}
  \end{align}
\end{document}   
EOT;
        break;
   } 
    case 'liquid': {
        $syntax_content = <<<EOT
The following examples can be found in full at http://liquidmarkup.org/

Liquid is an extraction from the e-commerce system Shopify.
Shopify powers many thousands of e-commerce stores which all call for unique designs.
For this we developed Liquid which allows our customers complete design freedom while
maintaining the integrity of our servers.

Liquid has been in production use since June 2006 and is now used by many other
hosted web applications.

It was developed for usage in Ruby on Rails web applications and integrates seamlessly
as a plugin but it also works excellently as a stand alone library.

Here's what it looks like:

  <ul id="products">
    {% for product in products %}
      <li>
        <h2>{{ product.title }}</h2>
        Only {{ product.price | format_as_money }}

        <p>{{ product.description | prettyprint | truncate: 200  }}</p>

      </li>
    {% endfor %}
  </ul>


Some more features include:

<h2>Filters</h2>
<p> The word "tobi" in uppercase: {{ 'tobi' | upcase }} </p>
<p>The word "tobi" has {{ 'tobi' | size }} letters! </p>
<p>Change "Hello world" to "Hi world": {{ 'Hello world' | replace: 'Hello', 'Hi' }} </p>
<p>The date today is {{ 'now' | date: "%Y %b %d" }} </p>


<h2>If</h2>
<p>
  {% if user.name == 'tobi' or user.name == 'marc' %} 
    hi marc or tobi
  {% endif %}
</p>


<h2>Case</h2>
<p>
  {% case template %}
    {% when 'index' %}
       Welcome
    {% when 'product' %}
       {{ product.vendor | link_to_vendor }} / {{ product.title }}
    {% else %}
       {{ page_title }}
  {% endcase %}
</p>


<h2>For Loops</h2>
<p>
  {% for item in array %} 
    {{ item }}
  {% endfor %}
</p>


<h2>Tables</h2>
<p>
  {% tablerow item in items cols: 3 %}
    {% if tablerowloop.col_first %}
      First column: {{ item.variable }}
    {% else %}
      Different column: {{ item.variable }}
    {% endif %}
  {% endtablerow %}
</p> 
EOT;
        break;
   }
    case 'powershell': {
        $syntax_content = <<<EOT
# This is a simple comment
function Hello(\$name) {
  Write-host "Hello \$name"
}

function add(\$left, \$right=4) {
    if (\$right -ne 4) {
        return \$left
    } elseif (\$left -eq \$null -and \$right -eq 2) {
        return 3
    } else {
        return 2
    }
}

\$number = 1 + 2;
\$number += 3

Write-Host Hello -name "World"

\$an_array = @(1, 2, 3)
\$a_hash = @{"something" = "something else"}

& notepad .\readme.md  
EOT;
        break;
   } 
    case 'jsx': {
        $syntax_content = <<<EOT
class _Main {
    static function main(args : string[]) :void {
        log "Hello, world!";
    }
} 
EOT;
        break;
   }
}

/* create test textarea */
$smarty->assign('testarea', $this->CreateTextArea(false, $id, $syntax_content, 'testarea', '', '', '', '', '', '', 'AceEditor', cms_userprefs::get_for_user($userid, 'mode', 'theme', 'fontsize', 'full_line', 'highlight_active', 'show_invisibles', 'persisten_hscroll', 'keybinding', 'soft_wrap', 'show_gutter', 'print_margin', 'soft_tab', 'highlight_selected', 'enable_behaviors')));

/* ProcessTempalte */
echo $this->ProcessTemplate('settings.tpl');

?>