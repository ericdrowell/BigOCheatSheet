<h2 id="searching">Searching</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Algorithm</th>
      <th>Data Structure</th>
      <th colspan="3">Time Complexity</th>
      <th colspan="3">Space Complexity</th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th>Best</th>
      <th>Average</th>  
      <th>Worst</th> 
      <th>Worst</th>                
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Depth-first_search">Depth First Search (DFS)</a></td>
      <td>Tree</td>
      <td><code class="green">O(1)</code></td>
      <td><code>-</code></td>
      <td><code class="red" rel="tooltip" title="b = branching factor, d = depth of the tree">O(b^d)</code></td>
      <td><code class="green" rel="tooltip" title="|V| means the number of vertices in the longest path of the tree">O(|V|)</code></td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Breadth-first_search">Breadth First Search (BFS)</a></td>
      <td>Tree</td>
      <td><code class="green">O(1)</code></td>
      <td><code>-</code></td>
      <td><code class="red" rel="tooltip" title="b = branching factor, d = depth of the tree">O(b^d)</code></td>
      <td><code class="red" rel="tooltip" title="b = branching factor, d = depth of the tree">O(b^d)</code></td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Binary_search_algorithm">Binary</a></td>
      <td>Tree</td>
      <td>
        <code class="green">O(1)</code>
      </td>
      <td> 
        <code class="green">O(log(n))</code>
      </td>
      <td>
        <code class="green">O(log(n))</code>
      </td>
      <td>
        <code class="green">O(1)</code>
      </td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Brute-force_search">Linear (Brute Force)</a></td>
      <td>Array</td>
      <td><code class="green">O(1)</code></td>
      <td><code class="red">O(n)</code></td>
      <td><code class="red">O(n)</code></td>
      <td><code class="green">O(1)</code></td>
    </tr>
  </tbody>
</table>

<h2 id="sorting">Sorting</h2>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Algorithm</th>
      <th>Data Structure</th>
      <th colspan="3">Time Complexity</th>
      <th colspan="3">Space Complexity</th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th>Best</th>
      <th>Average</th>  
      <th>Worst</th>  
      <th>Worst</th>                
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Quicksort">Quicksort</a></td>
      <td>Array</td>
      <td><code class="yellow">O(n log(n))</code></td>
      <td><code class="yellow">O(n log(n))</code></td>
      <td><code class="red">O(n^2)</code></td>
      <td><code class="yellow">O(log(n))</code></td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Merge_sort">Mergesort</a></td>
      <td>Array</td>
      <td><code class="yellow">O(n log(n))</code></td>
      <td><code class="yellow">O(n log(n))</code></td>
      <td><code class="yellow">O(n log(n))</code></td>
      <td><code class="red">O(n)</code></td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Bubble_sort">Bubble Sort</a></td>
      <td>Array</td>
      <td><code class="green">O(n)</code></td>
      <td><code class="red">O(n^2)</code></td>
      <td><code class="red">O(n^2)</code></td>
      <td><code class="green">O(1)</code></td>
    </tr>
    <tr>
      <td><a href="http://en.wikipedia.org/wiki/Insertion_sort">Insertion Sort</a></td>
      <td>Array</td>
      <td><code class="green">O(n)</code></td>
      <td><code class="red">O(n^2)</code></td>
      <td><code class="red">O(n^2)</code></td>
      <td><code class="green">O(1)</code></td>
    </tr>
  </tbody>
</table>