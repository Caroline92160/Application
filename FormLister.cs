using ApplicationM2L1.Metier;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ApplicationM2L1
{
    public partial class FormLister : Form
    {
        private List<Adherent> LesAdherents;

        public FormLister(List<Adherent> lesAdherents)
        {
            InitializeComponent();
            LesAdherents = lesAdherents;

        }
      
        private void FormLister_Load(object sender, EventArgs e)
        {

            //dataGridViewAdherents.AutoGenerateColumns = true;
            //dataGridViewAdherents.AutoResizeColumns();

            //DataGridViewButtonColumn sup = new DataGridViewButtonColumn();
            //sup.Name = "supprimer";
            //sup.Text = "supprimer";
            //sup.UseColumnTextForButtonValue = true;
            //if (dataGridViewAdherents.Columns["sup"] == null)
            //{
            //    dataGridViewAdherents.Columns.Insert(4, sup);
            //}
            //Ne fonctionne qu'avec les propriétés.
            BindingSource bs = new BindingSource();
            bs.DataSource = typeof(Adherent);
            foreach (var item in LesAdherents)
            {
                bs.Add(item);
            }

            dataGridViewAdherents.DataSource = bs;                                            
            dataGridViewAdherents.AutoGenerateColumns = true; // create columns automatically 
            dataGridViewAdherents.AutoResizeColumns();
            foreach (DataGridViewColumn column in dataGridViewAdherents.Columns)
            {

                column.SortMode = DataGridViewColumnSortMode.Automatic;
            }
            


        }

        private void dataGridViewAdherents_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.ColumnIndex >= 0 && e.RowIndex >= 0)
            {
                var content = dataGridViewAdherents[e.ColumnIndex, e.RowIndex];
            }
            
        }

        private void dataGridViewAdherents_RowHeaderMouseClick(object sender, DataGridViewCellMouseEventArgs e)
        {
           // dataGridViewAdherents.Rows.Clear();
            var x = dataGridViewAdherents.Rows[e.RowIndex];
            
        }
    }
}
