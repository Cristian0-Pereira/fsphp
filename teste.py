def partition(V, p, r):
    x = V[r]
    i = p - 1

    for j in range(p, r):
        if V[j] <= x:
            i += 1
            V[i], V[j] = V[j], V[i]

    V[i+1], V[r] = V[r], V[i+1]

    return i + 1

# Teste do algoritmo
V = [3, 9, 1, 7, 4, 8, 6, 2, 5]
p = 0
r = len(V) - 1

print("Vetor original:", V)
print("Chamada da função Partition:")
posicao = partition(V, p, r)

print("Vetor após particionamento:", V)
print("Posição do elemento particionado:", posicao)
