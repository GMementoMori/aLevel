let x_or_y = 'x';
function xo(){
    if (x_or_y === 'x' && $(this).text() === '') {
       $(this).css('color', 'orange');
       $(this).text('x');
       x_or_y = 'o';
    }else if(x_or_y === 'o' && $(this).text() === ''){
       $(this).css('color', 'purple');
       $(this).text('o');
       x_or_y = 'x';
    }
	let e = $("td");
    for (var i = 0; i < e.length; i++) {
    	let indexOf = "td:eq(" + i + ")";
    	let c = $(indexOf).text();
    	let res = i + ':' + c;

    	if (res === '0:x') {
    		if ($("td:eq(1)").text() === 'x') {
    			if ($("td:eq(2)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(3)").text() === 'x') {
    				if ($("td:eq(6)").text() === 'x') {
    					alert('X WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'x') {
    				    if ($("td:eq(8)").text() === 'x') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	else if (res === '0:o') {
    		if ($("td:eq(1)").text() === 'o') {
    			if ($("td:eq(2)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(3)").text() === 'o') {
    				if ($("td:eq(6)").text() === 'o') {
    					alert('O WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'o') {
    				    if ($("td:eq(8)").text() === 'o') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	if (res === '2:x') {
    		if ($("td:eq(1)").text() === 'x') {
    			if ($("td:eq(0)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(5)").text() === 'x') {
    				if ($("td:eq(8)").text() === 'x') {
    					alert('X WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'x') {
    				    if ($("td:eq(6)").text() === 'x') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	else if (res === '2:o') {
    		if ($("td:eq(1)").text() === 'o') {
    			if ($("td:eq(0)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(5)").text() === 'o') {
    				if ($("td:eq(8)").text() === 'o') {
    					alert('O WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'o') {
    				    if ($("td:eq(6)").text() === 'o') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	if (res === '8:x') {
    		if ($("td:eq(5)").text() === 'x') {
    			if ($("td:eq(2)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(7)").text() === 'x') {
    				if ($("td:eq(6)").text() === 'x') {
    					alert('X WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'x') {
    				    if ($("td:eq(0)").text() === 'x') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	else if (res === '8:o') {
    		if ($("td:eq(5)").text() === 'o') {
    			if ($("td:eq(2)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(7)").text() === 'o') {
    				if ($("td:eq(6)").text() === 'o') {
    					alert('O WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'o') {
    				    if ($("td:eq(0)").text() === 'o') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	if (res === '6:x') {
    		if ($("td:eq(3)").text() === 'x') {
    			if ($("td:eq(0)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(7)").text() === 'x') {
    				if ($("td:eq(8)").text() === 'x') {
    					alert('X WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'x') {
    				    if ($("td:eq(2)").text() === 'x') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	else if (res === '6:o') {
    		if ($("td:eq(3)").text() === 'o') {
    			if ($("td:eq(0)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}else{
    			if ($("td:eq(7)").text() === 'o') {
    				if ($("td:eq(8)").text() === 'o') {
    					alert('O WIN!!!');
                        $("td").text('');
    				}

    			}else{
      			    if ($("td:eq(4)").text() === 'o') {
    				    if ($("td:eq(2)").text() === 'o') {
    					    alert('X WIN!!!');
                            $("td").text('');
    				    }
    			    }
    			}
    		}
    	}
    	if (res === '3:x') {
    		if ($("td:eq(4)").text() === 'x') {
    			if ($("td:eq(5)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	else if (res === '3:o') {
    		if ($("td:eq(4)").text() === 'o') {
    			if ($("td:eq(5)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	if (res === '5:x') {
    		if ($("td:eq(4)").text() === 'x') {
    			if ($("td:eq(3)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	else if (res === '5:o') {
    		if ($("td:eq(4)").text() === 'o') {
    			if ($("td:eq(3)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	if (res === '3:x') {
    		if ($("td:eq(4)").text() === 'x') {
    			if ($("td:eq(5)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	else if (res === '3:o') {
    		if ($("td:eq(4)").text() === 'o') {
    			if ($("td:eq(5)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	if (res === '1:x') {
    		if ($("td:eq(4)").text() === 'x') {
    			if ($("td:eq(7)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	else if (res === '1:o') {
    		if ($("td:eq(4)").text() === 'o') {
    			if ($("td:eq(7)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	if (res === '7:x') {
    		if ($("td:eq(4)").text() === 'x') {
    			if ($("td:eq(1)").text() === 'x') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    	else if (res === '7:o') {
    		if ($("td:eq(4)").text() === 'o') {
    			if ($("td:eq(1)").text() === 'o') {
                    alert('X WIN!!!');
                    $("td").text('');
    			}
    		}
    	}
    }
	if ($("td:eq(0)").text() !== '' && $("td:eq(1)").text() !== '' && $("td:eq(2)").text() !== '' && 
	    $("td:eq(3)").text() !== '' && $("td:eq(4)").text() !== '' && $("td:eq(5)").text() !== '' && 
	    $("td:eq(6)").text() !== '' && $("td:eq(7)").text() !== '' && $("td:eq(8)").text() !== '') {
            alert("Friendship is WIN! :)");
            $("td").text('');
	}
}

$("td").click(xo);