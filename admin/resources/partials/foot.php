
   <div class="toast text-white">
        <div class="toast-body text-center">
            <small id="toast-message"></small>
        </div>
    </div>

    <script src="/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

<script>
    const checkbox = document.querySelectorAll('[type=checkbox]');
    const host = window.location.host;

    const toast = (message, status) => {
        const toastBox = document.querySelector('.toast');
        const toastMessage = document.getElementById('toast-message');
        
        toastBox.classList.add('show')
        toastBox.classList.add(status);

        toastMessage.innerHTML = message;

        if(status == 'success'){
            setTimeout(() => {
                toastBox.classList.remove('show');
            }, 5000);
        }
    }
    
    const setUserModule = async (module) => {
        await fetch(`/admin/modules-manager`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                module: module
            })
        }).then(res => res.json())
        .then(res => {
            console.log(res);
            toast(res.message, res.status);
        });
    }

    checkbox.forEach(el => {
        el.addEventListener('change', e => {
            let module = {
                user_id: e.target.getAttribute('data-user-id'),
                name: e.target.getAttribute('data-name'),
                slug: e.target.value,
                isActive: e.target.checked
            }
            console.log(module);
            setUserModule(module);
        });
    })

    const tableRow = document.querySelectorAll('.user-table-row');

    tableRow.forEach(el => {
        el.addEventListener('click', e => {
            let table_ref = el.getAttribute('table-modules');
            let module_table = document.getElementById(table_ref);
            module_table.classList.toggle('d-none');
        })
    });
    
</script>
