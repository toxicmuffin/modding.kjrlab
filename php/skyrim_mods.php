<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyrim Mods</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>


    <style>
               body {
            background-color: #1b1c1c;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .section-header, .section-content {
            color: white;
        }

        .custom-link {
        color: #fafafa; /* Replace with the desired color value */   
        }

        .under-header:hover {
        text-decoration: underline;
        }
    </style>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active heading" href="../index.html">Home</a>
                    </li>

                    <!-- Getting Started-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle heading" href="#" id="navbarDropdownGettingStarted" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Getting Started
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownGettingStarted">
                        <a class="dropdown-item" href="../mo2_setup.html">Mod Organizer 2 Setup (MO2)</a>
                        <a class="dropdown-item" href="../loot_setup.html">LOOT</a>
                            <a class="dropdown-item" href="#">ATLauncher</a>
                            <!-- Add more options here -->
                        </div>
                    </li>

                    <!-- Game Mod Guides Dropdown-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle heading" href="#" id="navbarDropdownGameModGuides" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Game Modding Guides
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownGameModGuides">
                            <a class="dropdown-item" href="skyrim_mods.php">Skyrim Special Edition</a>
                            <a class="dropdown-item" href="#">Starfield</a>
                            <!-- Add more game options here -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Main Content -->
<div class="container-xl mx-auto">
    <div class="container-fluid d-flex flex-column align-items-center bg-image mt-5">

        <!-- Title -->
        <div class="section">
            <h2 class="section-header text-center display-4 text-info">Skyrim Special Edition Modding</h2>
        </div>

        <!-- Image -->
        <img src="/images/steps_skyrim.png" alt="Image" class="img-fluid mb-5 mt-5">

        <!-- Introduction -->
        <div class="section" style="max-width: 900px;">
            <h2 class="section-header text-center under-header" data-bs-toggle="collapse" data-bs-target="#collapseIntroduction" aria-expanded="false">Introduction</h2>
            <div class="collapse section-content text-start" id="collapseIntroduction">
                <p>Welcome to my Skyrim modding section! This page will contain basics on how to setup Skyrim Mods and good practices to ensure a smooth experience. I will say this mod pack I use can be very taxing on older hardware. You may want to avoid using some mods like Lux (I would stil try it out and see if your older GPU can actually handle it).</p>

                <p>Throughout this page you will see a lot of mods that you are to download. Please note, if I do not specify how to install, assume I mean you are to download via Mod Organizer 2 (from nexusmods or where you want to get your mods from) and install that way. Otherwise refer directly to the mod authors instructions for each mod on how to install!</p>

                <p class="mb-3">Please read the First Things First section before downloading mods to ensure you understand what you are doing!</p>


                <p class="text-info lead">Recommended Specs</p>
                    <ul>
                        <li>CPU: Intel i5 4000 series or newer (or AMD equivalent)</li>
                        <li>GPU: RTX 2070 or newer(or AMD equivalent)</li>
                        <li>RAM: 16GB or more</li>
                        <li>Storage: SSD with at least 100GB of free space just for the mods</li>
                    </ul>
                <p class="lead">The GPU will probably be the biggest factor, so if you have a weaker GPU maybe don't go crazy with the graphical mods</p>

            </div>
        </div>

        <!-- First Things First -->
        <div class="section" style="max-width: 900px;">
            <h2 class="section-header text-center under-header" data-bs-toggle="collapse" data-bs-target="#collapseFirstThingsFirst" aria-expanded="false">First Things First</h2>
            <div class="collapse section-content text-start" id="collapseFirstThingsFirst">
            <p>Before you begin modding Skyrim, please check out the guide on how to install and setup Mod Organizer <a href="../mo2_setup.html" class="custom-link">here</a>.</p>

            <p>Once MO2 is ready to go please learn how to setup LOOT and add the executable to MO2 for easy access, guide <a href="../loot_setup.html" class="custom-link">here</a>.</p>


                <p class="text-warning">I cannot stress this enough: DO NOT CHANGE MODS MID PLAYTHROUGH, you are asking for trouble. Please make a new save each time you make changes. Some mods will specify if they can be added/updated during a save, so do so at your OWN RISK</p>

                <p class="text-info lead">For every mod you see here, download the appropriate version that works with Anniversary build of Skyrim SE Version: 1.6.640</p>

                <p>There are some mods that I highly recommend you install first:</p>
            <ul class="mb-3">
                <li><a href="https://skse.silverlock.org/" target="_blank">SKSE</a></li>
                <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/32444" target="_blank">Address Library for SKSE Plugins</a></li>
                <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/266" target="_blank">Unofficial Skyrim Patch</a></li>
                <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/12604" target="_blank">SkyUI</a></li>   
            </ul>

            <h4>Installing SKSE</h4>
            <ul>
            
                    <br>
                        <strong>Quick YouTube Guide:</strong> <a href="https://www.youtube.com/watch?v=mfKpp8Ri9lY&list=PLhvuRv3vONb5Uwb6rAy6y1r_1WB4Pe151&index=4" target="_blank">Video by 
                        ADHDecent</a>
                 
                    <br>
                    <br>
                    
                    
                    <li>
                        <strong>Step 1:</strong> Download the latest version of SKSE from the official website. <code>Make sure to choose the correct version for Skyrim Special Edition</code>
                    </li>
                    <li>
                        <strong>Step 2:</strong> Extract the downloaded files to a temporary location on your computer.
                    </li>
                    <li>
                        <strong>Step 3:</strong> Copy the necessary files from the extracted SKSE files to your Skyrim Special Edition installation folder (where SkyrimSE.exe is located).
                        <ul>
                        <li>Copy the <code>DLL file, exe file, and Data</code> folder in the SKSE download into the root folder of your Skyrim Special Edition installation.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Step 4:</strong> Launch Mod Organizer 2 (MO2)
                    </li>
            
                    <li>
                    <strong>Step 5:</strong> Click on the "Executables" button in MO2 (represented by two gears: one green, one blue).
                    </li>
                    <li>
                    <strong>Step 6:</strong> In the "Add/Edit Executables" window, click on the blue "+" icon at the top left of the window and select <strong>Add from File</strong>.
                    </li>
                    <li>
                    <strong>Step 7:</strong> Browse to the SKSE executable (<code>skse64_loader.exe</code>) and select it.
                    <p><em>Note:</em> The "Binary" field will now be auto-filled with the location of <code>skse64_loader.exe</code>.</p>
                    </li>
                    <li>
                    <strong>Step 8:</strong> Verify the following fields:
                    <ul>
                        <li><strong>Title:</strong> Enter a name for the executable (e.g., <code>SKSE</code>).</li>
                        <li><strong>Binary:</strong> This should already be auto-filled with the path to <code>skse64_loader.exe</code>.</li>
                        <li><strong>Start in:</strong> Ensure this points to the directory where <code>SkyrimSE.exe</code> is located (your Skyrim Special Edition installation folder).</li>
                    </ul>
                    </li>
                    <li>
                    <strong>Step 9:</strong> Click <strong>OK</strong> to save the changes and close the "Add/Edit Executables" window.
                    </li>
                    <li>
                    <strong>Step 10:</strong> In MO2, ensure the newly added SKSE executable is selected as the default launcher by clicking the wrench icon and selecting it from the dropdown list.
                    </li>
                    <li>
                    <strong>Step 11:</strong> Launch Skyrim Special Edition through MO2 by clicking on the <strong>Run</strong> button. This will start the game using SKSE.
                    </li>
                    <li>
                    <strong>Step 12:</strong> Verify that SKSE is installed correctly:
                    <ul>
                        <li>Open the in-game console by pressing the tilde key (<code>`</code> or <code>~</code>).</li>
                        <li>Type <code>GetSKSEVersion</code> and press Enter.</li>
                        <li>If installed properly, the version number of SKSE will be displayed.</li>
                    </ul>
                    </li>

            </ul>



                <p class="text-info lead">Important Notes</p>
                    <ul>
                        <li>After installing a mod, launch the game to verify nothing was broken. Makes it much easier to find out what mod is causing an issue!</li>
                        <li>Never forget to use LOOT to sort your plugins each time you make changes to your mod list</li>
                        <li>MAKE SURE SKYRIM NEVER AUTO UPDATES: <em>Go to Steam Library, Right Click the Game (Skyrim) go to Properties < Updates < Automatic Updates < Change to only update this game when I launch it</em></li>
                        <li>Always launch the game using SKSE via Mod Organizer, you will almost never touch the base EXE or go through Steam</li>
                        <li class="text-warning">ALWAYS LISTEN to the mod authors installation instructions. Download the correct mod version that works for your Skyrim Version</li>
                        <li>The "Mod Priority" number you will see in my mod list refers to the priority number (in the left panel of Mod Organizer) that the mod is set at.</li>
                        <li>Not sure what Skyrim version you have? : <em>Go to your Skyrim root folder, right click the game's exe, go to properties, Details tab, you should see a File version area. THIS IS YOUR SKYRIM VERSION</em>. For example, mine is 1.6.640. Majority of you will be on this version</li>
                        <li>When you install a lot of these mods, they will ask you specificly if you would like to also download optional patches and other addons. 99% of the time MO2 will auto detect mods you have installed and will auto check patches, this is intended and a good thing.</li>
                        <li>Take note of what mods come with patches so you can reinstall later to install the other patches for mods you have newly installed. JK Skyrim is a mod that requires a LOT of patches, so please take note as to which mods you need to have compatibility patches for.</li>
 
 
                    </ul>
            </div>
        </div>


        <!-- Mod List -->
        <div class="section" style="max-width: 900px;">
            <h2 class="section-header text-center under-header" data-bs-toggle="collapse" data-bs-target="#collapseModList" aria-expanded="false">Mod List</h2>
            <div class="collapse section-content text-start" id="collapseModList">
                <?php
                include $_SERVER['DOCUMENT_ROOT'].'/php/mod_list.php';

                // Sort the modList array by Mod_Name
                usort($modList, function ($a, $b) {
                    return strcmp($a['Mod_Name'], $b['Mod_Name']);
                });

                foreach ($modList as $index => $mod) :
                ?>
                <div class="mod-item">
                    <div class="mod-name text-center bg-dark text-white p-3" data-bs-toggle="collapse" data-bs-target="#modInfo<?php echo $index; ?>" aria-expanded="false">
                        <a href="<?php echo $mod['Mod_Link']; ?>" class="custom-link mod-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to open in a new tab"><?php echo $mod['Mod_Name']; ?></a>
                    </div>
                    <div id="modInfo<?php echo $index; ?>" class="collapse mod-info bg-dark text-white p-3">
                        <p class="text-warning mb-1">Mod Version: <?php echo $mod['Mod_Version']; ?></p>
                        <p class="text-info mb-5">Mod Priority: <?php echo $mod['Mod_Priority']; ?></p>
                        <p class="text-success">Installation: </p>
                        <p><?php echo $mod['Installation_Instructions']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Close button -->
                <div class="text-center mt-3">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseModList" aria-expanded="true" aria-controls="collapseModList">Close</button>
                </div>
            </div>
        </div>


                <!-- Handles How Mod Links Work-->
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const modLinks = document.querySelectorAll('.mod-link');
                    modLinks.forEach(function(link) {
                        link.addEventListener('click', function(event) {
                            event.stopPropagation();
                            event.preventDefault(); // Prevents the default action
                            window.open(event.target.href, '_blank'); // Opens the link in a new tab
                        });
                    });
                });
                </script>




        <!-- DynDOLOD and TexGen -->
        <div class="section" style="max-width: 900px;">
            <h2 class="section-header text-center under-header" data-bs-toggle="collapse" data-bs-target="#collapseDynDOLODandTexGen" aria-expanded="false">DynDOLOD and TexGen</h2>
            <div class="collapse section-content text-start" id="collapseDynDOLODandTexGen">
                <p>This section will go over how to utilize DynDOLOD and Texgen. If you are unsure what these are and how to set them up, please refer to the click the Setup tab in this section to get started. </p>

                <!-- Setup section -->
                <div class="section mt-4">
                    <h3 class="section-header text-center text-warning mb-3 under-header" data-bs-toggle="collapse" data-bs-target="#collapseSetup" aria-expanded="false">Setup</h3>
                    <div class="collapse section-content text-start" id="collapseSetup">
                        <p class="text-warning">Before starting please go over these resources I have provided for more explainations on DynDOLOD and how to set it up. </p>
    
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=encZYHEeQrQ" class="custom-link" target="_blank">Gamer Poets DynDOLOD Basics YT Video</a></li>
                            <li><a href="https://dyndolod.info/Mods" class="custom-link" target="_blank">DynDOLOD Mods Page</a> Great documentation please read</li>
                        </ul>

                        <h4 class="text-danger mt-2">Requirements</h4>
                        <ul>
                            <li><a href="https://skse.silverlock.org/" class="custom-link" target="_blank">SKSE</a> - Refer to First Things First for install</li>
                            <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/13048" class="custom-link" target="_blank">PapyrusUtil SE</a></li>
                            <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/12604" class="custom-link" target="_blank">SkyUI</a></li>
                            <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/52897?tab=files" class="custom-link" target="_blank">DynDOLOD Resources SE 3</a> - Check all Visual Options and Desync Birds of Prey when installing</li>
                            <li><a href="https://www.nexusmods.com/skyrimspecialedition/mods/52897?tab=files" class="custom-link" target="_blank">DynDOLOD DLL SE</a> - Download 2 Mods - Scripts and SKSE64 Plugin for your version (mine is 1.6.640) and in MO2 place DLL Scripts mod lower than Resources in priority and make the DLL lower than scripts (Resources > Scripts > DLL)</li>
                            <li> You may need various Visual Studio and .NET Runtime versions installed please refer to documentation on DynDOLOD if you need them</li>
                        </ul>

                        <h4 class="text-success mt-2">Installation and Setup</h4>
<p><strong>Step 1:</strong> Download and Install Required plugins from the section above</p>
<p><strong>Step 2:</strong> <a href="https://www.nexusmods.com/skyrimspecialedition/mods/52897?tab=files" class="custom-link" target="_blank">DynDOLOD Alpha</a> Download, Extract and Place in an easy to find place. I recommend making a "Modding Tools" folder and place it there!</p>
<p><strong>Step 3:</strong> Now we will add executables to MO2, in Mod Organizer click the green and blue gear box button located at the top. This will open the "Modify Executables" window. Click the "+" and select Add empty</p>

<ul>
    <li><strong>Title:</strong> DynDOLOD</li>
    <li>Click the "..." button on Binary: Go to where you placed DynDOLOD Folder, select DynDOLODx64.exe</li>
    <li>Apply and save!</li>
    <li>Repeat the exact process for "TexGen". Just name the title "TexGen". The TexGenx64.exe is in the same folder as the DynDOLOD</li>
    <li>Apply and save!</li>
    <li>You now have your executables completed and ready for use</li>
</ul>

<p><strong>Step 4:</strong> Now we will run both TexGen and DynDOLOD along with placing the outputs</p>
<p class="text-warning">Do this process at the very end of your modding; this process will require you to have all the mods you want ready to go as it will use that information during the process. Don't forget to add a tree mod before running TexGen and DynDOLOD.</p>

<p class="lead">TexGen</p>
<ul>
    <li><strong>Step 1:</strong> Change executable to TexGen and click the Run button to launch</li>
    <li><strong>Step 2:</strong> If you have absolutely no idea what you are doing, just leave everything at default and click the "Start" button *This process can take a long time depending on PC specs*</li>
    <li><strong>Step 3:</strong> When finished, click "Zip & Exit" - failure to do this will make the entire time you spent a waste</li>
    <li><strong>Step 4:</strong> Head to your DynDOLOD folder you made earlier and you should now see a "TexGen_Output" folder, inside there is a zip. Place this zip into the 'Downloads' tab in the right panel of Mod Organizer</li>
    <li><strong>Step 5:</strong> You will know TexGen_Output is installed once you see it in your list on the left. DO NOT FORGET TO CHECK MARK the TexGen output in Mod Organizer before moving to the next step</li>
</ul>

<p class="lead">DynDOLOD</p>
<ul>
    <li><strong>Step 1:</strong> Change executable to DynDOLOD and click the Run button to launch</li>
    <li><strong>Step 2:</strong> Select Worldspaces applicable to you (most likely just check all of them) and then select the medium preset button</li>
    <li><strong>Step 3:</strong> If you have absolutely no idea what you are doing, just leave everything at default and click the "Start DynDOLOD" button *This process can take a MUCH LONGER time depending on PC specs and settings (mine takes up to 40 MIN!)*</li>
    <li><strong>Step 4:</strong> When finished, click "Zip & Exit" - failure to do this will make the entire time you spent a waste</li>
    <li><strong>Step 5:</strong> Head to your DynDOLOD folder you made earlier and you should now see a "DynDOLOD_Output" folder, inside there is a zip. Place this zip into the 'Downloads' tab in the right panel of Mod Organizer</li>
    <li><strong>Step 6:</strong> Enable DynDOLOD_Output in your mod list</li>
</ul>


                        <p class="text-danger lead">You will have to repeat this process every single time you change a vegetation mod (trees, grass etc). If you have to run again, remember to uncheck and delete the Output files from your mod list entirely and start fresh</p>

                        <p>Thats it!</p>

                    </div>
                </div>
            </div>
        </div>

<!-- ENB Section -->
<div class="section" style="max-width: 900px;">
  <!-- ENB - Main Title (Collapsible) -->
  <h2 class="section-header text-center text-white under-header" data-bs-toggle="collapse" data-bs-target="#collapseENB" aria-expanded="false">ENB</h2>

  <!-- ENB - Content (Collapsible) -->
  <div class="collapse section-content text-start" id="collapseENB">
    <div class="section mt-4">

    
  <h4 class="text-center mb-3 mt-2">What is ENB and why should you consider using it?</h4>

<p>ENB is a collection of visual enhancement mods designed to dramatically improve the graphics and lighting effects in games, with a particular emphasis on creating more immersive and realistic environments. ENB can alter almost every aspect of a game's visuals, including lighting, shadows, colors, textures, and more.</p>

<p>For Skyrim, the ENB mods are a game-changer. They transform the game's graphics from good to stunning, adding a level of detail and realism that isn't possible with the vanilla game alone. With ENB, the world of Skyrim becomes more atmospheric and immersive, with realistic lighting, beautiful sunsets and sunrises, more detailed shadows, improved textures, and much more.</p>

<p>It's worth considering using ENB mods if you're looking to enhance your Skyrim experience visually. They can help bring the world to life in a way that few other mods can match. But keep in mind that these improvements come at a cost: ENB mods can be quite resource-intensive and may significantly impact performance on older or less powerful systems.</p>

<p>Another reason to use ENB is the level of customization it offers. With ENB presets like Cabbage, you can fine-tune the look of your game to your personal taste. Whether you prefer a vibrant, colorful world, a dark and moody atmosphere, or something in between, there's likely an ENB preset that suits your style.</p>
      <!-- ENB - Subsection Title (Collapsible within ENB - Content) -->
      <h3 class="section-header text-center text-warning mb-1 under-header" data-bs-toggle="collapse" data-bs-target="#collapseENBSetup" aria-expanded="false">Setup</h5>
      <!-- ENB - Subsection Content (Collapsible within ENB - Content) -->
      <div class="collapse section-content text-start" id="collapseENBSetup">
        <p class="mb-3">To set up ENB for Skyrim, follow these general steps:</p>
        <h4>Installing Weather Plugin and ENB Binaries</h4>
<ul>
    <li>
        <strong>Step 1:</strong> Download the Weather plugin from NAT 3 from the official Nexus Mods site. The link is: <a href="https://www.nexusmods.com/skyrimspecialedition/mods/27141">NAT 3 Weather Plugin</a>
    </li>
    <li>
        <strong>Step 2:</strong> Download ENB Binaries from <a href="http://enbdev.com/download_mod_tesskyrimse.html">ENBdev</a>.
    </li>
    <li>
        <strong>Step 3:</strong> Extract the ENB Binaries archive. Navigate into the "WrapperVersion" folder. This folder includes essential files such as d3dcompiler_46e.dll, d3d11.dll, and others needed for ENB to function.
    </li>
    <li>
        <strong>Step 4:</strong> Copy all the files from the "WrapperVersion" folder and paste them into your root Skyrim Special Edition installation folder (where SkyrimSE.exe is located).
    </li>
</ul>


<h4>Making INI changes in Mod Organizer</h4>
<ul>
    <li>
        <strong>Step 1:</strong> Launch Mod Organizer and click on the Tools button (the wrench and screwdriver icon).
    </li>
    <li>
        <strong>Step 2:</strong> Select INI Editor from the drop-down menu.
    </li>
    <li>
        <strong>Step 3:</strong> In the editor window, select the SkyrimPrefs.ini tab.
    </li>
    <li>
        <strong>Step 4:</strong> Locate and modify the following lines as needed. If they do not exist, you can add them to the end of the file:
        <ul>
            <li>bSAO_CS_Enable=0</li>
            <li>bSAOEnable=0</li>
            <li>bEnableImprovedSnow=0</li>
            <li>bVolumetricLightingEnable=1</li>
            <li>bUse64bitsHDRRenderTarget=1</li>
            <li>bDrawLandShadows=1</li>
            <li>bDoDepthOfField=1</li>
        </ul>
    </li>
    <li>
        <strong>Step 5:</strong> Click Save and close the INI Editor.
    </li>
</ul>

<h4>Installing the Cabbage Preset for ENB</h4>
<ul>
    <li>
        <strong>Step 1:</strong> Download the Cabbage preset for ENB from <a href="https://cabbage.koji.cc/">https://cabbage.koji.cc/</a>
    </li>
    <li>
        <strong>Step 2:</strong> Extract the downloaded files to a temporary location on your computer.
    </li>
    <li>
        <strong>Step 3:</strong> Copy all the extracted files and folders into your Skyrim Special Edition root folder (where SkyrimSE.exe is located).
    </li>
    <li>
        <strong>Step 4:</strong> A prompt will ask if you want to overwrite existing files. Select "Replace" for all items, as the Cabbage preset is intended to overwrite the default ENB settings.
    </li>
</ul>

<h4>Accessing the ENB Menu In-Game</h4>
<ul>
    <li>
        Once in-game, press the END key on your keyboard to open the ENB menu.
    </li>
</ul>

      </div>
    </div>
  </div>
</div>




<!-- FAQ -->
<div class="section mb-5" style="max-width: 900px;">
  <h2 class="section-header text-center under-header" data-bs-toggle="collapse" data-bs-target="#collapseFAQ" aria-expanded="false">FAQ</h2>
  <div class="collapse section-content text-start" id="collapseFAQ">
    <div class="section mt-4">
      <h5 class="section-header text-center text-info mb-1" data-bs-toggle="collapse" data-bs-target="#collapseQuestion1" aria-expanded="false">Why do some mods not have a [Mod Manager Download] button?</h5>
      <div class="collapse section-content text-start" id="collapseQuestion1">
        <p class="mb-3">Some mods cannot be installed via a mod manager. Often these mods are required to go into a root directory (such as the Skyrim directory itself) or they need to be in other directories.</p>
        <p class="mb-3">In extremely rare cases, it will work just fine if you drop the zip folder for the mod into the "Downloads" tab in the right panel of your MO2 (Legacy of the Dragonborn works this way). Always adhere to the mod page's installation instructions.</p>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>



<script>
    // Manually toggle collapse state when clicking on section header
    $('.section-header').click(function() {
        var target = $(this).data('bs-target');
        $(target).collapse('toggle');
    });
</script>

</body>
</html>
