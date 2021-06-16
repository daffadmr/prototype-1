<div>
    <section class="container profile-of-user my-5">
        <div class="w-full">
            <div class="py-3 mb-4 text-black text-sm">
                <ul class="flex">
                    <li><a href="{{ route('home') }}" class="underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="font-bold">User Profile</li>
                </ul>
            </div>
        </div>

        <p class="text-3xl mt-4 font-bold">User Profile</p>
        <div class="flex justify-center my-6">
            <div class="flex flex-col rounded-md w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y">
                <p class="text-xl font-bold">{{ $user->name }}'s Profile</p>
                    <table class="text-left w-full border-collapse"> 
                        <tbody>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">Name</td>
                                <td class="py-4 px-6 border-b border-grey-light">:</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->name }}</td>
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
                                    @if (!empty($user->alamat) )
                                        <p>{{ $user->alamat }}</p>
                                    @else
                                        <p>-</p>
                                    @endif
                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-t border-grey-light">Telephone</td>
                                <td class="py-4 px-6 border-t border-grey-light">:</td>
                                <td class="py-4 px-6 border-t border-grey-light">
                                    @if (!empty($user->no_hp) )
                                        <p>{{ $user->no_hp }}</p>
                                    @else
                                        <p>-</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                   <div class="mt-5 text-right">
                   <a href="{{ route('edit-profile', Auth::id()) }}" class="inline-flex justify-center px-10 py-2 w-56 text-white font-semibold bg-blue-900 hover:bg-blue-800 rounded-md shadow-sm"> <i class="fas fa-edit"></i> Edit Profile</a>
                   </div>
            </div>
        </div>
    </section>
</div>
