<div>
    <section class="edit-user-profile my-5">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('user-profile', $user->id) }}" class="underline">User Profile</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">Edit Profile</li>
                </ul>
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">Edit Profile</p>
        <div class="flex justify-center my-6">
            <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                <p class="text-xl font-bold">Edit {{ $user->name }}'s Profile</p>
                    <form wire:submit.prevent="saveProfile">
                        <table class="text-left w-full mt-3 border-collapse"> 
                                <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-t border-grey-light">Name</td>
                                        <td class="py-4 px-6 border-t border-grey-light">:</td>
                                        <td class="py-4 px-6 border-t border-grey-light">{{ $user->name }}</td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-t border-grey-light">Mail Address</td>
                                        <td class="py-4 px-6 border-t border-grey-light">:</td>
                                        <td class="py-4 px-6 border-t border-grey-light">{{ $user->email }}</td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-t border-grey-light">Address</td>
                                        <td class="py-4 px-6 border-t border-grey-light">:</td>
                                        <td class="py-4 px-6 border-t border-grey-light">
                                        <textarea wire:model="address" class="w-full px-3 py-2 text-gray-700 border-2 rounded-lg focus:outline-none focus:border-black" placeholder="Your Address" rows="4"></textarea>                                    
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-t border-grey-light">Telephone</td>
                                        <td class="py-4 px-6 border-t border-grey-light">:</td>
                                        <td class="py-4 px-6 border-t border-grey-light">
                                        <input type="text" wire:model="telephone" class="w-full px-3 py-2 border-2 rounded-lg text-gray-700 focus:outline-none focus:border-black" placeholder="Your Telephone Number">
                                        </td>
                                    </tr>
                                </tbody>
                        </table>

                        <div class="mt-5 text-right">
                            <a href="{{ route('user-profile', $user->id) }}" class="mx-2 inline-flex justify-center px-10 py-2 w-56 text-white font-semibold bg-red-900 hover:bg-red-800 rounded-md shadow-sm"> <i class="fas fa-arrow-left"></i>&nbspBack</a>
                            <button type="submit" class="inline-flex justify-center mx-2 px-10 py-2 w-56 text-white font-semibold bg-blue-900 hover:bg-blue-800 rounded-md shadow-sm"> <i class="fas fa-save"></i>&nbspSave</button>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</div>
