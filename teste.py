def part(V, p, r):
    x = V[r]
    i = p -1

    for j in range(p, r):
        if V[j] <= x:
            i += 1
            V[i], V[j] = V[j], V[i]

    V[i+1], V[r] = V[r], V[i+1]

    return i + 1

V=[9,4,3,5,1,2]
p = 0
r = len(V) -1

posicao = part(V, p, r)

print("Vetor particionado:", V)
print("Posição:", posicao)