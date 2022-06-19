<?php 

session_start();

if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {

 ?>


<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Licence 1</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>

  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}">
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#">
            Admin
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="accueile.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="homepage.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Accueile</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="licence1.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 1</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="licence2.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 2</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="licence3.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 3</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="master1.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Master 1</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="master2.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Master 2</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="doctorat.php">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Doctorat</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#">
            Admine
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="accueile.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="homepage.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Accueile</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="licence1.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 1</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="licence2.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 2</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="licence3.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Licence 3</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="master1.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Master 1</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="master2.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Master 2</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="doctorat.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                </svg>
                <img
                class="object-cover w-5 h-5 rounded-full"
                src="feather-pen.png"
                alt=""
                aria-hidden="true"/>
                <span class="ml-4">Doctorat</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <div class="flex flex-col flex-1">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu">
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"/>
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode">
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20">
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none flex flex-row center-center"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true">
                  <img
                    class="object-cover w-5 h-5 rounded-full"
                    src="user.png"
                    alt=""
                    aria-hidden="true"/>
                    <h1 ><?php echo $_SESSION['name']; ?></h1>
                </button>
              </li>
              <!-- Log-Out -->
              <li class="relative">
                <button>
                  <a href="logout.php" 
                  aria-haspopup="true">
                  <img
                    class="object-cover w-5 h-5 rounded-full"
                    src="logout.png"
                    alt=""
                    aria-hidden="true"/>
                    </a>
                </button>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto">

          <div class="container px-6 mx-auto grid">

            <div class="justify-center"><h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Licence 1</h2></div>
            </br>
            </br>
            </br>
            <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Specialité</h1>

            <?php
                 //ob_start();
							   include_once('db_conn.php');
                 $r = mysqli_query($conn,"select * from specialite where id_niv = '1' ");


                 $name = "";

                 if(isset($_POST['name'])){
                  $name = $_POST['name'];
                 }

                 if(empty($name)){

                 }else{
                  $sqls="";
                  if(isset($_POST['btnadd'])){
                   $sqls = "insert into specialite('name_spec','id_niv') values('$name','1')";
                   mysqli_query($conn, $sqls);
                   //header("URL= licence1.php");
                  }
                  if(isset($_POST['btnedit'])){
                   $sqls ="update specialite set name_spec = '$name' where id_spec = '$num' ";
                   mysqli_query($conn, $sqls);
                   //header("Location: licence1.php");
                  }
                  if(isset($_POST['btndel'])){
                   $sqls ="delete from specialite where id_spec = '$num' ";
                   mysqli_query($conn, $sqls);
                   //header("Location: licence1.php");
                  }
                 }
                
                //ob_end_clean();
            ?>

            <form method ="post">    
              <div>
                 <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name Specialité</label>
                 <input type="text" id="name" name="name" class="block p-2 w-auto text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              </br>
              <div>
                   <button name="btnadd"  class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add</button>
                   <button name="btnedit"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                   <button name="btndel"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
              </div>
            </form> 
           </br>

           <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <div class="p-4">
                <label for="table-search" class="sr-only dark:text-gray-300">Search</label>
                <div class="relative mt-1">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                   <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">                </div>
              </div>
                <table id ="spec" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                       <th scope="col" class="px-6 py-3">Id </th>
                       <th scope="col" class="px-6 py-3">Nom</th>
                       <th scope="col" class="px-6 py-3">Niveau</th> 
                    </tr>
                  </thead>
                  <?php 
                  while($row = mysqli_fetch_array($r) ){
                    echo '<tr class="bg-white dark:bg-gray-800 border-b transition duration-300 ease-in-out  hover:bg-gray-100">';
                    echo '<td class="px-6 py-4 ">' . $row[0]   . '</td>';
                    echo '<td class="px-6 py-4 ">' . $row[1] . '</td>';
                    $result = mysqli_query($conn,"select * from niveaux where id_niv=$row[2]");
                    $row1=mysqli_fetch_array($result);
                    echo '<td class="px-6 py-4 ">' . $row1[1] . '</td>';
                    echo '</tr>';
                  }?>
                </table>

            </div>

            <script>
              var tbl = document.getElementById("spec");
              for(var x = 1; x < tbl.rows.length; x++){
                tbl.rows[x].onclick = function(){
                  document.getElementById("no").value = this.cells[0].innerHTML;
                  document.getElementById("name").value = this.cells[1].innerHTML;
                }
              }
            </script>
            <script>
               function myFunction() {
               // Declare variables
               var input, filter, table, tr, td, i, txtValue;
               input = document.getElementById("myInput");
               filter = input.value.toUpperCase();
               table = document.getElementById("spec");
               tr = table.getElementsByTagName("tr");

               // Loop through all table rows, and hide those who don't match the search query
               for (i = 0; i < tr.length; i++) {
               td = tr[i].getElementsByTagName("td")[0];
               if (td) {
               txtValue = td.textContent || td.innerText;
               if (txtValue.toUpperCase().indexOf(filter) > -1) {
               tr[i].style.display = "";
               } else {
               tr[i].style.display = "none";
             }}}}
           </script>


                    <!--       partie Module      -->
            </br>
            </br>
            </br>
            </br>
            <hr>


            <?php
                 $num = "";
                 $name = "";
                 $sems = "";
                 $spec = "";


                 if(isset($_POST['no'])){
                  $num = $_POST['no'];
                 }
                 if(isset($_POST['name'])){
                  $name = $_POST['name'];
                 }
                 if(isset($_POST['sems'])){
                  $sems = $_POST['sems'];
                  $rsems = mysqli_query($conn, "select id_sems from semestre where name_sems='$sems'");
                 }
                 if(isset($_POST['spec'])){
                  $spec = $_POST['spec'];
                  $rspec = mysqli_query($conn, "select id_spec from sspecialite where name_spec='$spec'");
                 }

                 if(empty($num) || empty($name) || empty($sems) || empty($spec)){

                 }else{
                  
                  if(isset($_POST['btnadd'])){
                  
                   $sql = "insert into module values('$num','$name','$smes','$spec','L3')";
                   mysqli_query($conn, $sql);
                   echo "<script> alert('data added successfully');</script>";
                  }
                  if(isset($_POST['btnedit'])){
                   $sqls ="update module set name_mod = '$name' ,  where id_spec = '$num' ";
                   mysqli_query($conn, $sqls);
                   //header("Location: licence1.php");
                  }
                  if(isset($_POST['btndel'])){
                   $sqls ="delete from specialite where id_spec = '$num' ";
                   mysqli_query($conn, $sqls);
                   //header("Location: licence1.php");
                  }
                 }
                
                //ob_end_clean();
            ?>

            <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Module</h1>
            <form method ="post">    
              <div>
                 <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Id</label>
                 <input type="text" id="name" name="name" class="block p-2 w-auto text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div>
                 <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name Module</label>
                 <input type="text" id="name" name="name" class="block p-2 w-auto text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="flex flex-row">
              <div>
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semestre :</label>
              <select id="sems" name="sems"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <?php 
                $sqli = "select name_sems from semestre";
                $result = mysqli_query($conn, $sqli);
                while($row = mysqli_fetch_array($result)){
                  echo "<option value='$row[0]'>".$row[0]."</option>";
                }
              ?>
              </select>
              </div>
              <div>
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Specialité : :</label>
              <select id="spec" name="spec" onChange="update()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <?php 
                $sqli = "select name_spec from specialite where id_niv = 'L1'";
                $result = mysqli_query($conn, $sqli);
                while($row = mysqli_fetch_array($result)){
                  echo '<option>'.$row[0].'</option>';
                }
              ?>
              </select>
              </div>
              
              </div>
  

              </br>
              <div>
                   <button name="btnadd" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add</button>
                   <button name="btnedit"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                   <button name="btndel"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
              </div>
            </form> 
            <br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <div class="p-4">
                <label for="table-search" class="sr-only dark:text-gray-300">Search</label>
                <div class="relative mt-1">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                   <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd">
                   </path></svg>
                  </div>
                  <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">                
                </div>
              </div>
                <table id ="spec" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                       <th scope="col" class="px-6 py-3">Id </th>
                       <th scope="col" class="px-6 py-3">Nom</th>
                       <th scope="col" class="px-6 py-3">Semestre</th> 
                       <th scope="col" class="px-6 py-3">Specialite</th> 
                       <th scope="col" class="px-6 py-3">Niveau</th> 
                    </tr>
                  </thead>
                  <?php 
                  while($row = mysqli_fetch_array($r) ){
                    echo '<tr class="bg-white dark:bg-gray-800 border-b transition duration-300 ease-in-out  hover:bg-gray-100">';
                    echo '<td class="px-6 py-4 ">' . $row['id_spec']   . '</td>';
                    echo '<td class="px-6 py-4 ">' . $row['name_spec'] . '</td>';
                    echo '<td class="px-6 py-4 ">' . $row['id_niv']    . '</td>';
                    echo '</tr>';
                  }?>
                </table>

            </div>

            <script>
	var select = document.getElementById('spec');
var text = select.options[select.selectedIndex].value;
console.log(text);
	       	</script>



                           <!--       partie cour      -->
            </br>
            </br>
            </br>
            </br>
            <hr>
            <?php 

            ?>
            <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Cour</h1>
            <form method ="post">    
              <div>
                 <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name Cour</label>
                 <input type="text" id="name" name="name" class="block p-2 w-auto text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div>
                 <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contenue</label>
                 <input type="text" id="name" name="name" class="block p-2 w-auto text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="flex flex-row">
              <div>
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Module :</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <?php 
                $sqli = "select name_mod from module where id_niv='L1'";
                $result = mysqli_query($conn, $sqli);
                while($row = mysqli_fetch_array($result)){
                  echo '<option>'.$row[0].'</option>';
                }
              ?>
             </select>
              </div>
              <div>
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semestre :</label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <?php 
                $sqli = "select name_sems from semestre";
                $result = mysqli_query($conn, $sqli);
                while($row = mysqli_fetch_array($result)){
                  echo '<option>'.$row[0].'</option>';
                }
              ?>
             </select>
              </div>
              <div>
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Specialité : </label>
              <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <?php 
                $sqli = "select name_spec from specialite where id_niv='L1'";
                $result = mysqli_query($conn, $sqli);
                while($row = mysqli_fetch_array($result)){
                  echo '<option>'.$row[0].'</option>';
                }
              ?>
             </select>
              </div>
              </div>
  

              </br>
              <div>
                   <button name="btnadd" type="submit" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add</button>
                   <button name="btnedit"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                   <button name="btndel"  class="inline-block px-6 py-3 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
              </div>
            </form> 
            <br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <div class="p-4">
                <label for="table-search" class="sr-only dark:text-gray-300">Search</label>
                <div class="relative mt-1">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                   <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd">
                   </path></svg>
                  </div>
                  <input type="text" id="myInput" onkeyup="myFunction()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-3  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">                
                </div>
              </div>
                <table id ="spec" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                       <th scope="col" class="px-6 py-3">Id </th>
                       <th scope="col" class="px-6 py-3">Nom</th>
                       <th scope="col" class="px-6 py-3">Module</th> 
                       <th scope="col" class="px-6 py-3">Semestre</th> 
                       <th scope="col" class="px-6 py-3">Niveau</th> 
                    </tr>
                  </thead>
                  <?php 
                  while($row = mysqli_fetch_array($r) ){
                    echo '<tr class="bg-white dark:bg-gray-800 border-b transition duration-300 ease-in-out  hover:bg-gray-100">';
                    echo '<td class="px-6 py-4 ">' . $row['id_spec']   . '</td>';
                    echo '<td class="px-6 py-4 ">' . $row['name_spec'] . '</td>';
                    echo '<td class="px-6 py-4 ">' . $row['id_niv']    . '</td>';
                    echo '</tr>';
                  }?>
                </table>

            </div>



           <!-- end content -->
          </div>

        </main>

      </div>

    </div>

  </body>
</html>
<?php 
}else{

     echo " U CAN\'T BROWSE THIS PAGE DIRECTLY...(press the down button << Back >>.)";
    // header("REFRESH:5; Location: preindex.php"); ?>
    <div class="text-center lg:text-left">
    <button> 
    <a href="/websitedroit/preindex.php"
       type="submit"
       class="inline-block px-20 py-10 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
       BACK
      </a>

    </button>
     </div>
<?php
     exit();
    }
?>