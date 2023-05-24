export const tableProviders = (validations) => {
    const table_providers = Array.from(document.querySelectorAll("#providers-table tr"));
    const provider_selected = document.getElementById("provider-selected");
  
    table_providers.forEach((tr, index) => {
      if(index > 0){
        tr.addEventListener('click', (e) => {
          const listTr = tr.children;
          const [provider] = listTr;
          
          provider_selected.value = provider.textContent;
          validations(provider_selected, 3)[provider_selected.name]();
        });
      }
    });
  }