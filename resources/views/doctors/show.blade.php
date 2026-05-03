<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctor Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 border-b border-gray-200 pb-4 flex items-center">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">
                                <span style="color: #4f46e5">{{ $doctor->first_name }}
                                    {{ $doctor->last_name }}</span>'s Details
                            </h2>
                            <p class="mt-1 text-sm text-gray-500">View the full details of a doctor.</p>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Personal Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->first_name }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->middle_name ?? '--' }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->last_name }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->email }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->contact_number }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Biography</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $doctor->bio }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Professional information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Professional Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Specialization</label>
                                <div class="mt-1">
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-bold rounded-full bg-blue-100 text-blue-800 border border-blue-200">
                                        {{ $doctor->specialization }}
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Qualifications</label>
                                <div class="mt-1">
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-bold rounded-full bg-blue-100 text-blue-800 border border-blue-200">
                                        {{ $doctor->qualifications }}
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Licenses</label>
                                <div class="mt-1">
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-bold rounded-full bg-blue-100 text-blue-800 border border-blue-200">
                                        {{ $doctor->license }}
                                    </span>
                                </div>
                            </div>


                        </div>
                        <div class="mt-6 md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Assigned Clinic</label>
                            <div
                                class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                {{ $doctor->assigned_clinic ?? 'None' }}
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-between pt-5 border-t border-gray-200">
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST"
                            onsubmit="return confirm('Delete this record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-sm font-medium text-red-600 hover:text-red-800 transition">
                                Delete Doctor Record
                            </button>
                        </form>

                        <div class="flex">
                            <a href="{{ route('doctors.index') }}"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3 transition duration-150">
                                Back
                            </a>
                            <a href="{{ route('doctors.edit', $doctor->id) }}"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded text-sm transition duration-150 shadow-sm">
                                Edit Doctor
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>