<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 border-b border-gray-200 pb-4">
                        <h2 class="text-2xl font-semibold text-gray-800"><span
                                style="color: #4f46e5">{{ $doctor->first_name }}
                                {{ $doctor->middle_name }}
                                {{ $doctor->last_name }}</span>
                        </h2>
                        <p class="mt-1 text-sm text-gray-500 w-full">Edit the doctor's information.</p>
                    </div>

                    {{-- Edit form --}}
                    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Personal Information -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Personal Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First
                                        Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" id="first_name"
                                        value="{{ $doctor->first_name }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>

                                <div>
                                    <label for="middle_name" class="block text-sm font-medium text-gray-700 mb-1">Middle
                                        Name</label>
                                    <input type="text" name="middle_name" id="middle_name"
                                        value="{{ $doctor->middle_name }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Optional">
                                </div>

                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last
                                        Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" id="last_name" value="{{ $doctor->last_name }}"
                                        required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email<span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="email" id="email" value="{{ $doctor->email }}" required
                                        class=" w-full border border-gray-300 rounded-md shadow-sm py-2 px-3
                                        focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm
                                        transition duration-150" placeholder="john@example.com">
                                </div>

                                <div>
                                    <label for="contact_number"
                                        class="block text-sm font-medium text-gray-700 mb-1">Contact
                                        Number <span class="text-red-500">*</span></label>
                                    <input type="tel" name="contact_number" id="contact_number"
                                        value="{{ $doctor->contact_number }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="(555) 123-4567">
                                </div>

                                <div>
                                    <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Biography<span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="bio" id="bio" value="{{ $doctor->bio }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Short biography here">
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Professional Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="specialization" class="block text-sm font-medium text-gray-700 mb-1">
                                        Specialization <span class="text-red-500">*</span></label>
                                    <input type="text" name="specialization" id="specialization"
                                        value="{{ $doctor->specialization }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="e.g., Diagnostic Medine">
                                    </select>
                                </div>

                                <div>
                                    <label for="qualifications"
                                        class="block text-sm font-medium text-gray-700 mb-1">Qualifications <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="qualifications" id="qualifications"
                                        value="{{ $doctor->qualifications }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Doctor's qualifications here">
                                </div>

                                <div>
                                    <label for="license"
                                        class="block text-sm font-medium text-gray-700 mb-1">License<span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="license" id="license" value="{{ $doctor->license }}"
                                        required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Doctor's license here">
                                </div>

                                <div>
                                    <label for="assigned_clinic"
                                        class="block text-sm font-medium text-gray-700 mb-1">Assigned Clinic<span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="assigned_clinic" id="assigned_clinic"
                                        value="{{ $doctor->assigned_clinic }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Doctor's assigned clinic here">
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex justify-end pt-5 border-t border-gray-200">
                            <a class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3 transition duration-150"
                                href="{{ route('doctors.index') }}">
                                Cancel
                            </a>

                            <button type="submit" onclick="return confirm('Update this doctor\'s record?');"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded text-sm transition duration-150 shadow-sm">
                                Update Doctor Record
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>