<!doctype html>
    <head>
	  <?php require '/home/public/head.php';?>
	  <?php require '/home/public/functionsToChangeToDoListView.php';?>
      <title>To Do Lists, Now Consolidated!</title>
    </head>
    <body>
      <div class="header-container">
        <header class="wrapper clearfix">
          <h1 class="title">To Do Lists, Now Consolidated!</h1>
        </header>
      </div>

    <div class="main-container container-fluid">
      <nav>
		<?php require '/home/public/navBarTemplate.php';?>
	  </nav>
		<p><span style="color:green;background-color:rgb(242,222,223);">Red</span> means not started, <span style="color:green;background-color:rgb(222,240,216);">green</span> means done, and, <span style="color:green;background-color:white;">white</span> means in progress.</p><br><p>Use the buttons at the top of the page to show or hide different tasks or date headers.</p>
		
		<table class="table" id="newTableWithMoreDatesForImprovedTimeTrackingCapabilities12232018">
		  <thead>
		    <tr>
			  <th><h2>New Items as of <time>Sunday, December 23, 2018</time></h2></th>
			</tr>
		  </thead>
		  <tbody>
		  <tr class="danger">
		    <td>make a new page dedicated to shopping list/bought thangs!???!?!! :DOS</td>
		  </tr>
		  <tr class="danger">
		    <td>design/study/make a beaded thing. i'm thinking jewelry! :O</td>
		  </tr>
		  <tr class="danger">
		    <td>modify new function for finding html tags to use the CODES so I can just paste into the page. :P I forgot this when I first created it! :O</td>
		  </tr>
		  <tr class="danger">
		    <td>create new module to auto generate these tasks for this to do list</td>
		  </tr>
		  <tr class="success">
		    <td>
			  create this new table to begin the New Way of dating and creating/adding tasks to this to do list!
			</td>
	      </tr>
	      <tr class="success">
		    <td>add scroll bar or debug problem with current code for scrollbar in bloggingmodule GUI.</td>
		  </tr>
		  <tr class="active">
		    <td><del>use the id on this newest table to begin formatting or allowing for formatting of all future entries</del> This idea will not work; if I want to include a creation and completion date as planned originally, I would probably need to use a database (maria bc mysql might be risky)</td>
		  </tr>
		  <tr class="success">
		    <td>pay off cc and other bills that had been piling up for about a month now 12/23/2018</td>
		  </tr>
		  <tr class="danger">
		    <td>create nail polish drying timer</td>
		  </tr>
		  <tr class="danger">
		    <td>create new module to auto generate these tasks for this to do list</td>
		  </tr>
		  <tr class="danger">
		    <td>pay electric bill for january 19 and confirm that the december 18 one was actually paid again :S</td>
		  </tbody>
        </table>	
		
		<table class="table">
		  <thead>
		    <tr>
			  <th><h3><time datetime="2018-12-10 12:00:00">Monday, December 10, 2018 Update - new feature idea AND ALL NEW IDEAS AND TO DOS MOVING FORWARD</time></h3></th>
			</tr>
		  </thead>
		  <tbody>
		  <tr class="success">
		    <td>fix bug when clicking ok to copy entry in blogging module gui when closing the gui. error message when I clicked ok button was: <code>Unable to find type [System.Windows.MessageBox]...At...bloggingModule.psm1:45 char:3...System.Windows.MessageBox Show('Paste (Ctrl+v) in the edit ... InvalidOperation...System.Windows.MessageBox:TypeName...RuntimeException...FullyQualifiedErrorId : TypeNotFound</code></td>
	      </tr>
		  <tr class="danger">
		    <td>wow to improve and maintain readability I should probably create some way to archive task that are done and fall under a date header a certain amount of time in the past. ugh, this probably means that I should also do two ther things, one of them being to start putting a date on every new to do item so that i do not have to include an awkward header with the date, and, the second thing is that I should create a new module to help write this html! This is an item I could add to the blogging module when I add the menus; yayyyy this gives me a better reason to write menus for that page! Yay!</td>
		  </tr>
		  <tr class="success">
		    <td>add button to minimize date headings in this list page; they are bugging me these days but I do not want to lose my approximate dates of created or done so I'd like to leave them but have the option to not look at them. It would probably be nice to leave them not showing by default but I'm not sure that will be necessary.
		  </tr>
		  <tr class="success">
		    <td>paint nails during christmas 2018 break yeah!</td>
		  </tr>
		  <tr class="success">
		    <td>fix formatting (really the padding or margin) of things I do online page; right now, some of the links are too close to other links which could affect readability and at the very least makes it ugly.</td>
		  </tr>
		  <tr class="success">
		    <td>fix text on to do list that explains color coding of tasks; right now, it is a little too bland to catch the eye which I suspect makes it basically lost on the page since it cannot compete with the color of the color coded tasks it is trying to explain!</td>
		  </tr>
		  <tr class="success">
		    <td>fix color of toggle buttons for to do list; they are currently gray and hard to read because button text is white?</td>
		  </tr>
		  <tr class="success">
		    <td>fix bug in powershell module that is not including date long string for entries that are first on a new day from the last one seen
		  <tr class="active">
		    <td>make done/hide the default for the to do list page</td>
		  </tr>
		  <tr class="success">
		    <td>arrange for holiday travels for 2018</td>
		  </tr>
		  <tr class="danger">
		    <td>make foreign language versions of pages</td>
		  </tr>
		  <tr class="success">
		    <td>make buttons for show/hide one button that toggles instead of a button for show and a button for hide for each task type</td>
		  </tr>
		  <tr class="success">
		    <td>open enrollment for 2019</td>
		  </tr>
		  <tr class="danger">
		    <td>add menus to bloggingModule GUI</td>
		  </tr>
		  <tr class="success">
		    <td>fix bug in bloggingModule for GUI so that after clicking OK to copy a new journal entry the GUI doesn't close at least without first making clear that the entry can be pasted.</td>
		  </tr>
		  <tr class="danger">
		    <td>check browser for location and time. use that to show site in either light theme or dark theme by default that changes with time of day :)</td>
		  </tr>
		  <tr class="danger">
		    <td>make dropdown on to do list page so that i can change the status of an activity and save the changes. consider auto saving in order to not lose info</td>
		  </tr>
		  <tr class="danger">
		    <td>make nav bar stick to top of screen at all times.</td>
		  </tr>
		  <tr class="success">
		    <td>fix css so that shadow effect does not make code element text difficult to read.</td>
		  </tr>
		  <tr class="success">
		    <td>fill next subscription since running out of d in a couple of days or so 12/13/2018.</td>
		  </tr>
		  <tr class="active">
		    <td>finish book Stiff asap!</td>
		  </tr>
		  <tr class="success">
		    <td>finish book interpreter of maladies.</td>
		  </tr>
		  <tr class="success">
		    <td>finish book julio iglesias unauthorized biography.</td>
		  </tr>
		  </tbody>
        </table>
		<table class="table">
		  <thead>
		    <tr>
			  <th><h3><time datetime="2018-11-03 09:22:40">Saturday, November 03, 2018 Update - Stuff to Fix</time></h3></th>
			</tr>
		  </thead>
		  <tbody>
		  <tr class="success">
		    <td>fix `n problem</td>
		  </tr>
		  <tr class="success">
			<td>make it possible to copy and paste without having to do lots of manual work after the paste in order to get nice formatting</td>
		  </tr>
		  <tr class="success">
			<td>too much space between date and entry text</td>
		  </tr>
		  <tr class="success">
			<td>transfer "Stuff To Fix" list to the "To Do" part of this site! Oops!</td>
		  </tr>
		  <tr class="success">
			<td>fixed clean up bug in bloggingModule function Get-PasteableBlogEntry</td>
		  </tr>
		  <tr class="success">
			<td>clean up OtherPages dir</td>
		  </tr>
		  <tr class="success">
			<td>create and add link to new to done list page in at least one spot</td>
		  </tr>
		  <tr class="success">
			<td>fix possible bug that duplicates blog entry in get-pasteable... function</td>
		  </tr>
		  <tr class="success">
			<td>automate process more for generating new blog entries since for now I have to have the three different module functions memorized which is going to be difficult after tonight!</td>
		  </tr>
		  <tr class="success">
			<td>be sure that all non-home pages link back to some other page (maybe easiest to just have one nav bar across top of all pages? think about this carefully)</td>
		  </tr>
		  <tr class="success">
			<td>clean up html in todo and done files to make adding new items easier in both lists.</td>
		  </tr>
		  <tr class="success">	
			<td>figure out how to get entries for same day to consolidate under just one day h1 tag since right now those repeat for each new entry made in the same day</td>
		  </tr>
		  <tr class="success">
			<td>put off time for December on calendar (mostly the work calendar) asap 11/11</td>
		  </tr>
		  <tr class="success">
			<td>make eye appointment asap</td>
		  </tr>
		  <tr class="success">
			<td>finish clearing off living room counter</td>
		  </tr>
		  <tr class="success">
			<td>clean living room counter</td>
		  </tr>
		  <tr class="success">
			<td>fix lists so that they use list elements oops argh</td>
		  </tr>
		  <tr class="active">
            <td>create some css to play with the different blog entries' formatting and what-not</td>
          </tr>
          <tr class="danger">
            <td><del>maybe a ui to make it easier to make checkbox lists and line breaks in my entries since I seem to use those a lot :P</del></td>
		  <tr class="danger">
            <td>figure out how to save checks in checkboxes</td>
		  </tr>
          <tr class="danger">
            <td>make entries collapsible/expandable :S :O</td>
		  </tr>
		  <tr class="danger">
            <td>fix URLs for non-home pages</td>
		  </tr>
		  <tr class="success">
            <td>create something that will make the nav bar (which is currently just hardcoded, repeated html) manageable from just one place</td>
		  </tr>
		  <tr class="danger">
            <td>make new page with master checklist of all html tags I have used in this site. :D</td>
	      </tr>
          </tbody>
        </table>
		<table class="table">
		  <thead>
		    <tr>
			  <th><h3><time datetime="2018-11-11 08:06:00">Saturday, November 03, 2018 Update - New To Do Update</time></h3></th>
			</tr>
		  </thead>
		  <tbody>
		  <tr class="success">
            <td>pack for MX 11/11</td>
		  </tr>
		  <tr class="danger">
		    <td>call GP to follow up about prescriptions now 12/9</td>
		  </tr>
		  <tr class="danger">
		    <td>find new psychiatrist to bug/lists of psychiatrist recommendations/more recommendations through insurance site blargh 11/11</td>
		  </tr>
		  <tr class="active">
		    <td>get a psychiatrist to f-ing reply to my messages 11/11</td>
		  </tr>
		  <tr class="danger">
		    <td>find a dentist (through website or in neighborhood I guess) 11/11</td>
		  </tr>
		  <tr class="danger">
            <td>make an appointment with a dentist 11/11</td>
		  </tr>
		  <tr class="success">
            <td>hang up clothes in bedroom 11/11</td>
		  </tr>
		  <tr class="success">
		    <td>find new bottle of meds in bedroom 11/11</td>
		  </tr>
		  <tr class="active">
			<td>vacuum apartment 11/11</td>
		  </tr>
		  <tr class="success">
			<td>sweep floors of apartment 11/11</td>
		  </tr>
		  <tr class="active">
		    <td>mop floors of apartment 11/11</td>
		  </tr>
		  <tr class="success">
			<td>get bedroom closet better organized again 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>dust ceiling 11/11</td>
		  </tr>
		  <tr class="active">
		  	<td>dust corners of walls 11/11</td>
		  </tr>
		  <tr class="active">
		    <td>dust walls :( 11/11</td>
		  </tr>
          <tr class="active">		  
			<td>dust dusty things 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>dust tops of fan blades 11/11</td>
		  </tr>
		  <tr class="active">
			<td>throw away all old food and condiments in fridge 11/11</td>
		  </tr>
		  <tr class="danger">
		  	<td>wash pieces of inside of fridge 11/11</td>
		  </tr>
		  <tr class="active">
			<td>clean out freezer 11/11</td>
		  </tr>
		  <tr class="active">
			<td>put all gross dishes in fridge in sink or trash 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>categorize this to do list? 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>call granny and papa 11/11</td>
		  </tr>
		  <tr class="success">
			<td><del>call papa? 11/11 (I think I have his new cell number now and I believe the old home number is not around these days?)</del> I got to visit him which I think is best. :)</td>
		  </tr>
		  <tr class="danger">
			<td>look at flamenco dance schedule at flamencura 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>look at ballet austin dance schedule 11/11</td>
		  </tr>
		  <tr class="danger">
		  	<td>wash dance clothes in closet drawers asap 11/11 (put them in dirty laundry pile I guess is what this means)</td>
		  </tr>
		  <tr class="danger">
			<td>back up phone 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>back up personal laptop 11/11 (maybe make sure <i>everything</i> that you care about is being backed up first this time)</td>
		  </tr>
		  <tr class="success">
			<td>upload code for creating new entries to git? 11/11 (or make it available online some other way?)</td>
		  </tr>
		  <tr class="danger">
			<td>take out all trash 11/11</td>
		  </tr>
		  <tr class="success">
			<td>go through old stored papers to throw away things you do not need anymore (shred them) 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>look up dates for throwing away big stuff OR plan for getting rid of big stuff in apartment 11/11</td>
		  </tr>
		  <tr class="success">
			<td>create view of both to do and done lists together 11/11</td>
		  </tr>
		  <tr class="success">
			<td>in view of both chore lists together, make feature to minimize or isolate a certain type of task (done, to do) 11/11</td>
		  </tr>
		  <tr class="success">
			<td>pack up out of season clothes that fit 11/11</td>
		  </tr>
		  <tr class="success">
			<td>unpack in season clothes that fit 11/11</td>
		  </tr>
		  <tr class="success">
			<td>bag clothes that don't fit 11/11</td>
	      </tr>
		  <tr class="success">
			<td>find clothes that don't fit 11/11</td>
		  </tr>
		  <tr class="active">
			<td>finish taking things out of living room or organizing things in living room that are out of place 11/11</td>
		  </tr>
		  <tr class="success">
			<td>clean coffee maker 11/11</td>
		  </tr>
		  <tr class="active">
			<td>put away clean dishes 11/11</td>
		  </tr>
		  <tr class="active">
			<td>wash dirty dishes in kitchen 11/11</td>
		  </tr>
		  <tr class="active">
			<td>collect dirty dishes in other parts of apartment and put in kitchen at least 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>change or clean shower curtain 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>clean shower and tub 11/11</td>
		  </tr>
		  <tr class="danger">
			<td>clean toilet 11/11</td>
		  </tr>
		  <tr class="success">
			<td>re-tape glasses?</td>
		  </tr>
		  <tr class="danger">
			<td>dammit even though the process sucked just trying to get started I still want to create my own dang font nooo</td>
		  </tr>
		  <tr class="success">
			<td>new project page where I work on things; design and create collection of things I do online (e.g. project euler, codecademy etc.)</li><ul><li>project euler</li><li>codecademy</li><li>codingames</li><li>freecodecamp</li></ul></td>
		  </tr>
		  <tr class="danger">
			<td>new project page: wanna see my vag? my virtual art gallery! :D</td>
          </tr>
		  </tbody>
        </table>
		<table class="table">
		  <thead>
		    <tr>
			  <th>special weekend before trip to do?!</th>
			</tr>
		  </thead>
		  <tbody>
		  <tr class="success">
            <td>find link to stella stuff for today's blog entry :)</td>
		  </tr>
		  <tr class="active">
			<td><del>start new powershell or javascript project to convert certain text to certain css font styles or smilies based on codes from a recent journal entry</del> Since I am going to write options for these things into the bloggingModule and unwittingly created a duplicate of this task toward the top of the page IIRC, I am marking this out.</td>
		  </tr>
		  <tr class="active">
			<td>store boxes</td>
		  </tr>
		  <tr class="success">
			<td>check kitchen storage for more papers that need sorting/checking</td>
		  </tr>
		  <tr class="danger">
			<td>add confirmation step to bloggingModule prevent instances of what happened to me tonight where my finger slipped and pressed enter prematurely which generated an incomplete and probably broken html journal entry for today :\</td>
		  </tr>
		  <tr class="success">
			<td>finish putting away all clean laundry on bed</td>
		  </tr>
		  <tr class="success">
			<td>move all clothing on closet floor from floor to bed to be sorted</td>
		  </tr>
		  <tr class="success">
			<td>sort and find a place for all clean laundry from closet floor</td>
		  </tr>
		  <tr class="success">
			<td>start thinking out how to fix checkboxes and how to consolidate lists into one page :|</td>
		  </tr>
		  <tr class="active">
			<td>check for any more stuff that needs to be cleared out from underneath bed</td>
		  </tr>
		  <tr class="active">
			<td>clear couch</td>
		  </tr>
		  <tr class="active">
			<td>clear blue chair in living room</td>
		  </tr>
		  <tr class="success">
			<td>clear/organize bedroom tv desk/stand</td>
		  </tr>
		  <tr class="success">
			<td>clear/organize top of incomplete drawers in bedroom</td>
		  </tr>
		</tbody>
        </table>
		
      </div>
	  
      <footer>
		<?php require '/home/public/footer.php';?>
      </footer>
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>