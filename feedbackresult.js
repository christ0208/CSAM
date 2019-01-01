let value = feedback;

if(value.includes("<script>") && value.includes("</script>")){  
    alert("FLAG{xss_cl4ss1c_expl0it_c6fca}");
}