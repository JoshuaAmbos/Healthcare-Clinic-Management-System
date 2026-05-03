<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-6 border-b border-gray-200 pb-4">
                        <h2 class="text-2xl font-semibold text-gray-800"><span
                                style="color: #4f46e5">{{ $patient->first_name }}
                                {{ $patient->middle_name }}
                                {{ $patient->last_name }}</span>
                        </h2>
                        <p class="mt-1 text-sm text-gray-500 w-full">Edit the patient's information.</p>
                    </div>

                    {{-- Edit form --}}
                    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
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
                                        value="{{ $patient->first_name }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>

                                <div>
                                    <label for="middle_name" class="block text-sm font-medium text-gray-700 mb-1">Middle
                                        Name</label>
                                    <input type="text" name="middle_name" id="middle_name"
                                        value="{{ $patient->middle_name }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="Optional">
                                </div>

                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last
                                        Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" id="last_name" value="{{ $patient->last_name }}"
                                        required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>
                            </div>
                        </div>

                        <!-- Medical History -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Medical History</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="blood_group" class="block text-sm font-medium text-gray-700 mb-1">Blood
                                        Group <span class="text-red-500">*</span></label>
                                    <select name="blood_group" id="blood_group" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-white focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                        <option value="{{ $patient->blood_group }}" disabled selected>Select Blood Group
                                        </option>
                                        @foreach ($blood_types as $blood_type)
                                            <option value="{{ $blood_type }}" {{ $patient->blood_group == $blood_type ? 'selected' : '' }}>
                                                {{ $blood_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="allergy"
                                        class="block text-sm font-medium text-gray-700 mb-1">Allergies</label>
                                    <input type="text" name="allergy" id="allergy" value="{{ $patient->allergy }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="e.g., Penicillin, Peanuts (Optional)">
                                </div>

                                <div class="md:col-span-2">
                                    <label for="chronic_conditions"
                                        class="block text-sm font-medium text-gray-700 mb-1">Chronic
                                        Conditions</label>
                                    <input type="text" name="chronic_conditions" id="chronic_conditions"
                                        value="{{ $patient->chronic_conditions }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="e.g., Asthma, Hypertension (Optional)">
                                </div>

                                <div class="md:col-span-2">
                                    <label for="past_surgeries"
                                        class="block text-sm font-medium text-gray-700 mb-1">Past
                                        Surgeries</label>
                                    <input type="text" name="past_surgeries" id="past_surgeries"
                                        value="{{ $patient->past_surgeries }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="e.g., Appendectomy 2015 (Optional)">
                                </div>

                                <div class="md:col-span-2">
                                    <label for="family_medical_history"
                                        class="block text-sm font-medium text-gray-700 mb-1">Family Medical
                                        History</label>
                                    <input type="text" name="family_medical_history" id="family_medical_history"
                                        value="{{ $patient->family_medical_history }}"
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150"
                                        placeholder="e.g., Family history of diabetes (Optional)">
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Emergency Contact</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="emergency_contact_name"
                                        class="block text-sm font-medium text-gray-700 mb-1">Contact Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="emergency_contact_name" id="emergency_contact_name"
                                        value="{{ $patient->emergency_contact_name }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>

                                <div>
                                    <label for="emergency_contact_phone"
                                        class="block text-sm font-medium text-gray-700 mb-1">Contact Phone
                                        <span class="text-red-500">*</span></label>
                                    <input type="tel" name="emergency_contact_phone" id="emergency_contact_phone"
                                        value="{{ $patient->emergency_contact_phone }}" required
                                        class="w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex justify-end pt-5 border-t border-gray-200">
                            <a class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 mr-3 transition duration-150"
                                href="{{ route('patients.index') }}">
                                Cancel
                            </a>

                            <button type="submit" onclick="return confirm('Update this patient\'s record?');"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded text-sm transition duration-150 shadow-sm">
                                Update Patient Record
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>