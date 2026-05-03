<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-6 border-b border-gray-200 pb-4 flex items-center">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">
                                <span style="color: #4f46e5">{{ $patient->first_name }}
                                    {{ $patient->last_name }}</span>'s Details
                            </h2>
                            <p class="mt-1 text-sm text-gray-500">View the full detail of a patient.</p>
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
                                    {{ $patient->first_name }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->middle_name ?? '--' }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->last_name }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medical History -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Medical History</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Blood Group</label>
                                <div class="mt-1">
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-bold rounded-full bg-red-100 text-red-800 border border-red-200">
                                        {{ $patient->blood_group }}
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Allergies</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->allergy ?? 'None reported' }}
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Chronic Conditions</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->chronic_conditions ?? 'None' }}
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Past Surgeries</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->past_surgeries ?? 'None recorded' }}
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Family Medical
                                    History</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->family_medical_history ?? 'No significant history' }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Emergency Contact</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contact Name</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-gray-900 font-semibold">
                                    {{ $patient->emergency_contact_name }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contact Phone</label>
                                <div
                                    class="w-full border border-gray-200 bg-gray-50 rounded-md py-2 px-3 text-sm text-indigo-600 font-bold">
                                    {{ $patient->emergency_contact_phone }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-between pt-5 border-t border-gray-200">
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                            onsubmit="return confirm('Delete this record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-sm font-medium text-red-600 hover:text-red-800 transition">
                                Delete Patient Record
                            </button>
                        </form>

                        <div class="flex">
                            <a href="{{ route('patients.index') }}"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3 transition duration-150">
                                Back
                            </a>
                            <a href="{{ route('patients.edit', $patient->id) }}"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded text-sm transition duration-150 shadow-sm">
                                Edit Patient
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>