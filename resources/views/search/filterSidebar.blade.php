<div class= 'container'>
    <form action="">
        <label for="cars" style="color:white">Kategorija</label>
        <select name="category" id="category" onchange="categoryChanged(this.value)">
            @foreach ($categories as $category)
                <option value="{{ $category->_id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="cars" style="color:white">Podkategorija</label>
        <select name="subCategory" id="subCategory" hidden>
        </select>

        <button type="submit" style="color:white">Primeni filtere</button>

    </form>
</div>
<script>
    async function categoryChanged(value) {
        let selectSubCategories = document.getElementById('subCategory');
        console.log('http://127.0.0.1:8000/api/subCategories/' + value);
        const res = await fetch('http://127.0.0.1:8000/api/subCategories/' + value, {
            method: 'get',
            // mode: 'cors'
        })

        selectSubCategories.innerHTML = await res.text();
        selectSubCategories.removeAttribute('hidden');

    }

    // function createDOMElements(data) {
    //     console.log(data);
    //     var select = document.getElementById('subCategory');
    //     select.innerHTML = '';
    //     // data.forEach(el => {
    //     //     var opt = document.createElement('option');
    //     //     opt.value = el.filterFields;
    //     //     opt.innerHTML = el.name;
    //     //     select.appendChild(opt);
    //     // });
    //     select.appendChild(data);
    //     console.log(select);

    //     select.removeAttribute('hidden');

    // }
</script>
