from graphviz import Digraph

graph = Digraph(comment = "Activities graph", format='png')
#, shape='none', image='actor.png', labelloc='b')


with graph.subgraph(name = 'clusterA') as g:
    g.attr(label="x")
    browsingActivities = ['Access main page', 'Browse sidebar', 'Browse content']
    i = 0
    for b in browsingActivities:
        name = 'A'+str(i)
        graph.node(name, b)
        graph.edge('guest', name)
        g.node(name)
        i+=1
    graph.body.append('A0->A1->A2')

# with graph.subgraph(name = 'clusterB') as g:
#     g.attr(label="x")
#     browsingActivities = ['Access main page', 'Browse sidebar', 'Browse content']
#     i = 0
#     for b in browsingActivities:
#         name = 'B'+str(i)
#         graph.node(name, b)
#         graph.edge('guest', name)
#         g.node(name)
#         i+=1
    

graph.node('guest', "Guest")

graph.render('x')


# dot = g.Digraph(comment='The Round Table', format='png')
# dot.node('A', 'King Arthur')
# dot.node('B', 'Sir Bedevere the Wise')
# dot.node('L', 'Sir Lancelot the Brave')

# dot.edges(['AB', 'AL'])
# dot.edge('B', 'L', constraint='false')

# dot.render('round-table')



# f = g.Digraph('finite_state_machine', format='png')
# f.attr(rankdir='LR', size='8,5')

# f.attr('node', shape='doublecircle')
# f.node('LR_0')
# f.node('LR_3')
# f.node('LR_4')
# f.node('LR_8')

# f.attr('node', shape='circle')
# f.edge('LR_0', 'LR_2', label='SS(B)')
# f.edge('LR_0', 'LR_1', label='SS(S)')
# f.edge('LR_1', 'LR_3', label='S($end)')
# f.edge('LR_2', 'LR_6', label='SS(b)')
# f.edge('LR_2', 'LR_5', label='SS(a)')
# f.edge('LR_2', 'LR_4', label='S(A)')
# f.edge('LR_5', 'LR_7', label='S(b)')
# f.edge('LR_5', 'LR_5', label='S(a)')
# f.edge('LR_6', 'LR_6', label='S(b)')
# f.edge('LR_6', 'LR_5', label='S(a)')
# f.edge('LR_7', 'LR_8', label='S(b)')
# f.edge('LR_7', 'LR_5', label='S(a)')
# f.edge('LR_8', 'LR_6', label='S(b)')
# f.edge('LR_8', 'LR_5', label='S(a)')

# f.render('x');

# g = g.Digraph('G', format='png')

# with g.subgraph(name='cluster_0') as c:
#     c.attr(style='filled')
#     c.attr(color='lightgrey')
#     c.node_attr.update(style='filled', color='white')
#     c.edges([('a0', 'a1'), ('a1', 'a2'), ('a2', 'a3')])
#     c.attr(label='process #1')

# with g.subgraph(name='cluster_1') as c:
#     c.node_attr.update(style='filled')
#     c.edges([('b0', 'b1'), ('b1', 'b2'), ('b2', 'b3')])
#     c.attr(label='process #2')
#     c.attr(color='blue')

# g.edge('start', 'a0')
# g.edge('start', 'b0')
# g.edge('a1', 'b3')
# g.edge('b2', 'a3')
# g.edge('a3', 'end')
# g.edge('b3', 'end')

# g.node('start', shape='Mdiamond')
# g.node('end', shape='Msquare')

# g.render('cluster')