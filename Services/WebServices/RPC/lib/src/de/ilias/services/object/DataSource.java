/*
        +-----------------------------------------------------------------------------+
        | ILIAS open source                                                           |
        +-----------------------------------------------------------------------------+
        | Copyright (c) 1998-2001 ILIAS open source, University of Cologne            |
        |                                                                             |
        | This program is free software; you can redistribute it and/or               |
        | modify it under the terms of the GNU General Public License                 |
        | as published by the Free Software Foundation; either version 2              |
        | of the License, or (at your option) any later version.                      |
        |                                                                             |
        | This program is distributed in the hope that it will be useful,             |
        | but WITHOUT ANY WARRANTY; without even the implied warranty of              |
        | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               |
        | GNU General Public License for more details.                                |
        |                                                                             |
        | You should have received a copy of the GNU General Public License           |
        | along with this program; if not, write to the Free Software                 |
        | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA. |
        +-----------------------------------------------------------------------------+
*/

package de.ilias.services.object;

import java.io.IOException;
import java.sql.PreparedStatement;
import java.util.Vector;

import org.apache.log4j.Logger;

import de.ilias.services.db.DBFactory;
import de.ilias.services.lucene.index.CommandQueueElement;
import de.ilias.services.lucene.index.DocumentHandler;
import de.ilias.services.lucene.index.DocumentHandlerException;

/**
 * 
 *
 * @author Stefan Meyer <smeyer.ilias@gmx.de>
 * @version $Id$
 */
public abstract class DataSource implements DocumentHandler {
	
	public static final int TYPE_JDBC = 1;
	public static final int TYPE_FILE = 2;
	
	protected static Logger logger = Logger.getLogger(DataSource.class);

	private int type;
	Vector<FieldDefinition> fields = new Vector<FieldDefinition>();
	

	/**
	 * 
	 */
	public DataSource(int type) {

		this.type = type;
	}
	
	
	/**
	 * @return the type
	 */
	public int getType() {
		return type;
	}

	/**
	 * @param type the type to set
	 */
	public void setType(int type) {
		this.type = type;
	}
	
	/**
	 * @return the fields
	 */
	public Vector<FieldDefinition> getFields() {
		return fields;
	}

	/**
	 * @param fields the fields to set
	 */
	public void setFields(Vector<FieldDefinition> fields) {
		this.fields = fields;
	}
	
	/**
	 * 
	 * @param field
	 */
	public void addField(FieldDefinition field) {
		this.fields.add(field);
	}
	
	/**
	 * 
	 * @see de.ilias.services.lucene.index.DocumentHandler#writeDocument(de.ilias.services.lucene.index.CommandQueueElement)
	 */
	public void writeDocument(CommandQueueElement el)
			throws DocumentHandlerException, IOException {

		logger.warn("Called abstract DataSource!");
		return;

	}

	/**
	 * 
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {
		
		StringBuffer out = new StringBuffer();

		for(Object field : getFields()) {
			
			out.append(field.toString());
		}
	
		return out.toString();
	}
}
