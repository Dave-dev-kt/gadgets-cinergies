@props(['field','options'])

<div {{ $attributes->merge(['class' => 'mt-4 flex-1']) }}
    x-data="data"
>
    <input type="hidden" :value="selected.value" name="{{ $field }}">
    <x-text-input
        x-model="search",
        placeholder="Click to search",
        type="search",
        @click="showOptions"
        @click.away="hideOptions"
    />
    <div class="relative">
        <div x-show="optionVisible" class="border p-2 w-1/2 bg-gray-200 h-60 overflow-scroll absolute z-50">
            <template x-for="option in options">
                <a
                    @click.prevent="selectOption(option)"
                    x-text="option.label"
                    class="flex px-2 cursor-pointer hover:bg-blue-200"
                ></a>
            </template>
        </div>
    </div>

    Label is <span x-text="selected.label"></span>
    Value is<span x-text="selected.value"></span>
</div>
<script>
    function data() {
        return {
            search : '',
            optionVisible: false
            selected: {
                label: '',
                value: ''
            },
            selectOption(option){
                this.selected = option;
                this.hideOptions();
                this.search = option.label
            }
            hideOptions(){
                this.optionVisible = false;
            }
            showOptions(){
                this.optionVisible = true;
            },
            options:{ !! $options->map(function($option,$key){
                return [
                    'label' =>$option,
                    'value' =>$key,
                ]
            })->values();!!},
            filterOptions(){
                this.options.filter((option) =>{
                    return option.label.toLowerCase().includes(this.search.toLowerCase());
                });
            }

            }
        }
    }
</script>
