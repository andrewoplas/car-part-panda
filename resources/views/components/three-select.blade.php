<div class="ThreeSelect {{$class ?? ''}}">
    <div class="inputs">
        <x-select
                class="no-caret select-input"
                :placeholder="$select1['placeholder']"
                :options="$select1['options']"
        ></x-select>
        <x-select
                class="no-caret select-input"
                :placeholder="$select2['placeholder']"
                :options="$select2['options']"
        ></x-select>
        <x-select
                class="no-caret select-input"
                :placeholder="$select3['placeholder']"
                :options="$select3['options']"
        ></x-select>
    </div>

    <div class="divider">
        <span class="item slash">/</span>
        <span class="item letter-r">R</span>
    </div>
</div>