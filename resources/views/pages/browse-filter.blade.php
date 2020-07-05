@extends('layouts.default')

@section('content')
    <div class="Browse mobile">
        <div class="filter">

            {{-- Merk --}}
            <div class="filter-item">
                <span class="Label">MERK</span>
                <select class="Select block">
                    <option selected disabled>Toon alle merken</option>
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
            </div>

            {{-- Model --}}
            <div class="filter-item">
                <span class="Label">MODEL</span>
                <select class="Select block">
                    <option selected disabled>Toon alle modellen</option>
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
            </div>

            {{-- Editie --}}
            <div class="filter-item">
                <span class="Label">EDITIE</span>
                <select class="Select block">
                    <option selected disabled>Toon alle edities</option>
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
            </div>


            {{--            --}}

            {{-- Koetswerk --}}
            <div class="filter-item">
                <span class="Label">KOETSWERK</span>
                <select class="Select block">
                    <option selected disabled>Geen voorkeur</option>
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
            </div>

            {{-- Deuren --}}
            <div class="filter-item">
                <span class="Label">DEUREN</span>
                <select class="Select block">
                    <option selected disabled>Geen voorkeur</option>
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
            </div>

            {{-- Prijs --}}
            <div class="filter-item">
                <div class="label-value">
                    <span class="Label">PRIJS</span>
                    <span class="value">Vanaf € 17.500</span>
                </div>

                <input type="range" class="Range" multiple value="0"/>
            </div>

            {{-- Bouwjaar --}}
            <div class="filter-item">
                <div class="label-value">
                    <span class="Label">BOUWJAAR</span>
                    <span class="value">Alles</span>
                </div>

                <input type="range" class="Range" multiple value="0"/>
            </div>

            {{-- Prijs --}}
            <div class="filter-item">
                <div class="label-value">
                    <span class="Label">KILOMETERSTAND</span>
                    <span class="value">Alles</span>
                </div>

                <input type="range" class="Range" multiple value="0"/>
            </div>

            {{-- Aankruisvakken --}}
            <div class="filter-item checkbox">
                <span class="Label">AANKRUISVAKKEN</span>

                <div class="group">
                    <div class="Checkbox">
                        <label>
                            <input type="checkbox"/>
                            <span></span>Enkel velgen met banden
                        </label>
                    </div>

                    <div class="Checkbox">
                        <label>
                            <input type="checkbox"/>
                            <span></span>Enkel velgen met banden
                        </label>
                    </div>
                </div>
            </div>

            {{-- Radio Buttons --}}
            <div class="filter-item checkbox">
                <span class="Label">RADIO BUTTONS</span>

                <div class="group">
                    <div class="RadioButton">
                        <input type="radio" name="exampleRadios" id="optie-1" value="optie-1"/>
                        <label for="optie-1">
                            Optie 1
                        </label>
                    </div>

                    <div class="RadioButton">
                        <input type="radio" name="exampleRadios" id="optie-2" value="optie-2"/>
                        <label for="optie-2">
                            Optie 2
                        </label>
                    </div>

                    <div class="RadioButton">
                        <input type="radio" name="exampleRadios" id="optie-3" value="optie-3"/>
                        <label for="optie-3">
                            Optie 3
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
