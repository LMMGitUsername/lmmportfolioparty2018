$dirToMySiteCode = "C:\Users\lmartinez\Documents\lmmportfolioparty\"

$allCodeLines = Get-ChildItem -Path $dirToMySiteCode -Recurse -Exclude ".git" | %{if($_.Extension -match ".php" -or $_.Extension -match ".html"){$_ | Get-Content}}

$listOfTagsWithDuplicatesForCommentsAndTheOneDoctypeTag = ($allCodeLines -split ">" | %{if($_ -ne $null -and $_ -match '^<' -and $_ -match '^</' -ne $true){$_.trim()}}) -split " " | %{if($_ -match '^<'){$_}} | select -Unique | sort

$commentAndOtherTagsBeginningWithExclamationPoint = $listOfTagsWithDuplicatesForCommentsAndTheOneDoctypeTag | %{if($_ -match '<!'){%{if($_.StartsWith("<!--")){$_.Substring(0,4) + " --"}else{$_}}}}

$tagsThatDoNotStartwithExclamationPoint = $listOfTagsWithDuplicatesForCommentsAndTheOneDoctypeTag | %{if($_.StartsWith("<!") -eq $false){$_ + ">"}}

$uniqueExclamationPointTags = $commentAndOtherTagsBeginningWithExclamationPoint | select -Unique | %{$_ + ">"}
$uniqueExclamationPointTagsNoLessThanOrGreaterThan = $uniqueExclamationPointTags.

$tagTrackerObject = New-Object -TypeName PSObject
Add-Member -InputObject $tagTrackerObject -MemberType NoteProperty -Name TagsBeginningWithExclamationPoint -Value $uniqueExclamationPointTags
Add-Member -InputObject $tagTrackerObject -MemberType NoteProperty -Name TagsExludingThoseBeginningWithExclamationPoint -Value $tagsThatDoNotStartwithExclamationPoint

#add option for seeing all in one list! and a view of all and the two different categories with the html codes instead of < and > 12/28/2018
$allTags = $uniqueExclamationPointTags + $tagsThatDoNotStartwithExclamationPoint
Add-Member -InputObject $tagTrackerObject -MemberType NoteProperty -Name AllTags -Value $allTags

$allTagsWithHtmlCodesForGreaterThanAndLessThanSymbols = $allTags -replace "<","&#60;"
$allTagsWithHtmlCodesForGreaterThanAndLessThanSymbols -replace ">","&#62;"
