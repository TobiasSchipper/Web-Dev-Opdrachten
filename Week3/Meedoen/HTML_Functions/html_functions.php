<?php 

/*
*Functions file - Make sure to NOT have an HTML doctype declaration. Function files are meant to be
*included in files that already contain these doctypes. You do NOT want duplicate doctype declarations.
*/

//Build collection for display of 'appblocks'
    $collection = array(
        'href'=>array('localhost', 'notepad-plus-plus.org', 'netbeans.apache.org', 'code.visualstudio.com', 'sublimetext.com', 'jetbrains.com/phpstorm/'),
        'img' =>array('phpmyadmin', 'npp', 'netbeans', 'vscode', 'sublime', 'phps'),
        'alt'=>array('phpadmin', 'notepad++', 'netbeans', 'vscode', 'sublime', 'PhpStorm')
    );

/*
*renderApps - Echo the required HTML to provide the htmlpage with an appblock. The repeatble elements
*inside the appblocks will be made part of the string. Only the 'dynamic' (changing) elements will be taken
*from the collection and displayed.
*/   function renderApps($apps){

    //Loop using for so that we can control our index (index is $i)
    //sizeof to determine the 'end' of our loop
    //Caution - will only successfully work when all 3 subarrays are equal size.
        for($i=0; $i<sizeof($apps['href']); $i++){
            echo '<a class="smTile" href="https://'. $apps['href'][$i] .'" target="_blank">
                <span class="image">
                    <span class="image-holder">
                        <img src="/img/'.$apps['img'][$i].'.jpg" alt="'.$apps['alt'][$i].'">
                    </span>
                </span>
                <div class="title">PHPMyAdmin</div>
            </a>';
        }

        

    }

?>