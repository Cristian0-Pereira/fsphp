def busca_binaria(x, V, p, r):
    if p <= r:
        meio = (p + r) // 2
        if V[meio] == x:
            return True
        elif V[meio] > x:
            return busca_binaria(x, V, p, meio - 1)
        else:
            return busca_binaria(x, V, meio + 1, r)
    else:
        return False

# Exemplo de uso:
V = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
x = 2
print("O valor", x, "foi encontrado:", busca_binaria(x, V, 0, len(V) - 1))
