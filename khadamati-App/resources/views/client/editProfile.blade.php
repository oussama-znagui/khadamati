<x-app>
 
<main>
    
<x-clientBar>
</x-clientBar>

<div class="p-4 sm:ml-32">
    <div class="flex justify-between items-center mb-4">
      <div class="flex justify-between lg:justify-center items-center gap-4">
          <div class="w-16 h-16 bg-[url('/./assets/img/image.webp')] bg-cover	bg-no-repeat	bg-center	 rounded-full"></div>
        <h1 class="font-bold text-xl md:text-2xl ">Oussama znagui</h1>
      </div>
       <div class="flex justify-center items-center gap-4">
            <p class="hidden sm:block  text-gray-800 font-bold">depuis 25/01/2022</p>
            <button type="button" class="opacity-80 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Logout</button>

        </div>
      
      </div>
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      
   
      <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
       
      
        
         <div class=" rounded-2xl bg-gray-200   ">
            <div class="rounded-2xl bg-gradient-to-br from-teal-400 to-sky-700 p-2 ">
                <h1 class="font-bold  text-3xl text-white px-2 py-4 ">Editez votre profile</h1>
            </div>

            <div class="my-6">
                <form class="mx-4">
 

    <div class="border-b border-gray-900/10 pb-12">
       <div class="md:w-2/5   mb-4 rounded  my-2">
         <p class="text-gray-700 font-bold text-lg">Photo de profil</p>
         <div class="h-44 bg-[url('/./assets/img/image.webp')] bg-cover	bg-no-repeat	bg-center	 rounded-2xl "></div>
         <p class="flex justify-center items-center gap-4  text-blue-500 font-bold my-2">

           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.394 9.553a1 1 0 0 0-1.817.062l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .894-1.447l-2-4A1 1 0 0 0 13.2 13.4l-.53.706-1.276-2.553ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd"/>
</svg> Changer la photo du profil</p>
    </div>


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Prenom</label>
          <div class="mt-2">
            <input type="text" name="" value="Oussama"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
           <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
          <div class="mt-2">
            <input type="text" name="" value="ZNAGUI"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

      

        <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input  name="" type="email" value="znagui.info@gmail.com"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
          <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Telephone</label>
          <div class="mt-2">
            <input type="text" name="" value="+212 669 66 62 05"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
          <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">Role</label>
          <div class="mt-2">
            <select name="" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">Client</option>
               
            </select>
          </div>
        </div>

        

        <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">Date de naissance</label>
          <div class="mt-2">
            <input  name="" type="date" value="25/01/2003"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">sexe</label>
          <div class="mt-2">
            <select name="" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="">Homme</option>
               
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Ville</label>
          <div class="mt-2">
            <input type="text" name="" value="Agadir"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Adresse</label>
          <div class="mt-2">
            <input type="text" name="" value="N° 123 Bloc F9 Cité Dakhla"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        
      
        

      

       
      

       

       
        
      </div>
         
    </div>
  

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6 p-4">
          <button type="button" class="block w-full text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Enregistrer</button>
<button type="button" class="block w-full text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Annuler</button>
  </div>
</form>
            </div>

            
            
            
         </div>
      </div>
     
</div>
</div>

</main>
</x-app>



