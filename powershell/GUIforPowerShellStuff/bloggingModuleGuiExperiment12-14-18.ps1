<# COMMENT TEMPLATE FROM https://gallery.technet.microsoft.com/scriptcenter/PowerShell-Comment-Block-373a1d9b
How to for creating a Windows GUI for PowerShell scripts from https://theitbros.com/powershell-gui-for-scripts/

.SYNOPSIS experiment (for now, as of creation on 12/15/2018) to see how a GUI for my bloggingModule or bloggule might look and work. Neat! A dream come true, really!
 
 
.DESCRIPTION see above
 
 
.NOTES 
+---------------------------------------------------------------------------------------------+ 
| ORIGIN STORY                                                                                | 
+---------------------------------------------------------------------------------------------+ 
|   DATE        : 2018.12.15 
|   AUTHOR      : __AUTHOR_NAME__ 
|   DESCRIPTION : Initial Draft 
+---------------------------------------------------------------------------------------------+ 
 
.PARAMETER Param01 
__DESC_PARAM01__ 
 
.PARAMETER Param02 
__DESC_PARAM02__ 
 
.EXAMPLE 
 
foo ` 
  -Param01 'Hello' ` 
  -Param02 'World' | oh 
 
#> 

#gotta start by loading class System.Windows.Forms in order to "use the .NET functionality to create forms."
Add-Type -assembly System.Windows.Forms
#next "create the screen form (window)"
$main_form = New-Object System.Windows.Forms.Form
#"set...title and size of the window"
$main_form.Text ='Bloggule 0.1'
$main_form.Width = 600
$main_form.Height = 400
#make form automatically stretch by using AutoSize property
$main_form.AutoSize = $true

#from https://theitbros.com/powershell-gui-for-scripts/; Create a label element on the form:
$Label = New-Object System.Windows.Forms.Label
$Label.Text = "Type journal entry here:"
$Label.Location  = New-Object System.Drawing.Point(0,10)
$Label.AutoSize = $true
$main_form.Controls.Add($Label)

$typeHtmlInHere = New-Object System.Windows.Forms.TextBox
#from https://docs.microsoft.com/en-us/dotnet/api/system.windows.forms.form.maximizebox?view=netframework-4.7.2. c# converted easily to powershell?
# Define the border style of the form to a dialog box.
$main_form.FormBorderStyle = FormBorderStyle.FixedDialog
# Set the MaximizeBox to false to remove the maximize box.
$main_form.MaximizeBox = false
# Set the MinimizeBox to false to remove the minimize box.
$main_form.MinimizeBox = false

# Set the start position of the form to the center of the screen.
#$main_form.StartPosition = FormStartPosition.CenterScreen BROKEN



#display window
$main_form.ShowDialog()


